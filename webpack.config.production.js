const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TerserJSPlugin = require('terser-webpack-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');


module.exports = {
  mode: 'production',
  entry: {
    effect: './assets/js/effect.js',
    loading: './assets/js/loading.js',
    scrollEffect: './assets/js/scrollEffect.js',
    style: './assets/sass/style.scss',
    'editor-style': './assets/sass/editor-style.scss',
    // ビルドするファイルを追加する場合は、ここにインプットファイルを設定  If you want to add files to build, set input files here
  },
  output: {
    path: path.resolve(__dirname, 'assets'),
    filename: 'js/min/[name].min.js',
  },
  module: {
    rules: [
        {
          test: /\.scss$/,
          use: [
            MiniCssExtractPlugin.loader,  // CSSを別ファイルへ書き出し  Export CSS to a separate file
            {
              loader: 'css-loader', // CSSをCommonJSに変換  Convert CSS to CommonJS
              options: {
                url: false, // url()を変換しない  Do not convert url()
                // sourceMap: true // productionモードではソースマップ非対応  sourceMap: true // source map not supported in production mode
              }
            },
            {
              loader: 'sass-loader',  // sassコンパイル  sass compilation
              options: {
                // sourceMap: false, // productionモードではソースマップ非対応  sourceMap: false, // source map not supported in production mode
                sassOptions: {
                  outputStyle: "compressed",
                },
              }
            }
          ]
        },
        {
          test: /\.m?js$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader", // Babel。JSのES6をES5に変換  Babel. converting ES6 to ES5 in JS.
            options: {
              presets: [
                "@babel/preset-env"
              ]
            }
          }
        },
    ]
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: ['js/min/*.map', 'css/*.map'],
    }), // ビルド前に古いビルドファイルを削除  Delete old build files before build
    new MiniCssExtractPlugin({  // CSSを別ファイルへ書き出し  Export CSS to a separate file
      filename: 'css/[name].css',
    }),
    new RemoveEmptyScriptsPlugin(), // 空のJSスクリプト除去  Empty JS script removal
    new FixStyleOnlyEntriesPlugin(),
  ],
  optimization: {
    minimizer: [
      new TerserJSPlugin({  // JSの圧縮（productionモードの時のみ）  JS compression (only in production mode)
        terserOptions: {
          sourceMap: false,
        },
      }),
    ]
  },
  watchOptions: {
    ignored: /node_modules/   // watchの際にnode_modules配下ソースを除外  Exclude sources under node_modules when watching
  },
  target: ["web", "es5"], // ES5に対応  Compatible with ES5
  // devtool: 'source-map',  // developmentモードではソースマップ対応   devtool: 'source-map', // source-map supported in development mode
};
