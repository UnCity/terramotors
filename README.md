# Skeleton 6.0

+ Skeletonはレスポンシブ化された静的コーディングテンプレートです。Skeleton is a responsive static coding template.
+ WebpackによってCSS・JSをビルドします。Build CSS/JS with Webpack.

## インストール install

### 環境 Environment

Nodeのインストールが必要です。Requires Node installation.<br>
下記の開発環境での動作を保証します。 Operation is guaranteed in the following development environment.

- Windows 10
- macOS Catalina, Big Sur
- Node v16.15.0
- npm v8.5.5

### インストール install

ターミナルで下記コマンドを実行 Run the following command in terminal

```shell
npm ci
```

## CSS・JS の編集・ビルド方法 How to edit and build CSS/JS

ビルドにはwebpackを使用しています。 I am using webpack for the build.

### CSSの編集 Editing CSS

Sassを使用して記述されています。 Written using Sass. <br>
Sass のソースコードは `/assets/sass` にあります。 The Sass source code is in `/assets/sass`.<br>
ビルドされたcssファイルは `/assets/css` に出力されます The built css file is output to `/assets/css`.。

※ CSSのエントリーポイントは `/assets/sass` 内の style.scss と editor-style.scss のみです。* CSS entry points are only style.scss and editor-style.scss in `/assets/sass`.<br>
追加・削除したい場合は webpack.config.dev.js 及び webpack.config.production.js を編集してください。 Edit webpack.config.dev.js and webpack.config.production.js if you want to add or remove them.

### JSの編集 Editing JS

Babelを使用してES5にコンパイルします。 Compile to ES5 using Babel.<br>
ビルド時に圧縮・難読化されます。 Compressed and obfuscated at build time.<br>
JS のソースコードは `/assets/js` にあります。 The JS source code is in `/assets/js`.<br>
ビルドされたJSファイルは `/assets/js/min` に出力されます。The built JS files are output to `/assets/js/min`.<br>

※ JSのエントリーポイントは `/assets/js` 内の effect.js と loading.js のみです。 * JS entry points are only effect.js and loading.js in `/assets/js`.<br>
追加・削除したい場合は webpack.config.dev.js 及び webpack.config.production.js を編集してください。 Edit webpack.config.dev.js and webpack.config.production.js if you want to add or remove them.

### ビルド Build

ターミナルで下記コマンドを実行。Execute the following command in terminal.<br>
ビルドには開発用ビルド（sourceMap対応）と本番用ビルド（sourceMap非対応）があります。 Builds include development builds (sourceMap enabled) and production builds (sourceMap not supported).

**開発用ビルド  Development Build**
```shell
npm run dev
```
または
```shell
npm run watch     # Sass, JSの変更を監視してビルド watch Sass, JS changes and build
```

**本番用ビルド Production build**
```shell
npm run build
```

※ 本番用ビルドを実施すると既存の.mapファイルは削除されます。* The existing .map file will be deleted when the production build is executed.


## 対応ブラウザ Supported browsers

- Chrome
- Edge
- Fire fox
- Safari
- IE11
- iOS Safari
- Android Chirome