<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-about">

    <?php get_sidebar('header'); ?>

    <div class="p-about__hero">
        <div class="p-about__hero-wrap">
            <div class="p-about__hero-item hero-item01">
				<div class="p-about__hero-bg">
					<video class="p-about__hero-bg" poster="<?php echo get_template_directory_uri(); ?>/assets/img/front/poster.jpg" autoplay muted loop playsinline>
						<source src="<?php echo get_template_directory_uri(); ?>/assets/img/front/mv.mp4" type="video/mp4">
					</video>
				</div>
                <div class="p-about__hero-content">
					<p class="p-about__hero-en">Mission</p>
                    <p class="p-about__hero-text">EVの力を、人の可能性に。</p>
                </div>
            </div>
			<div class="p-about__hero-item hero-item02">
				<div class="p-about__hero-bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/hero02.png" alt="Vision イメージ画像"></div>
                <div class="p-about__hero-content">
					<p class="p-about__hero-en">Vision</p>
                    <p class="p-about__hero-text">機会と変革の連鎖で、<br class="u-hide_more_sp">進化しつづける世界。</p>
                </div>
            </div>
			<div class="p-about__hero-item hero-item03">
				<div class="p-about__hero-bg">
					<video class="p-about__hero-bg" poster="<?php echo get_template_directory_uri(); ?>/assets/img/about/hero03-poster.jpg" autoplay muted loop playsinline>
						<source src="<?php echo get_template_directory_uri(); ?>/assets/img/about/hero03.mp4" type="video/mp4">
					</video>
				</div>
                <div class="p-about__hero-content">
					<p class="p-about__hero-en">Title</p>
                    <p class="p-about__hero-text">コピーコピーコピーコピーコピー</p>
                </div>
            </div>
        </div>
	</div>

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <div class="column_1">

        <!-- //// MAIN CONTENT START //// -->

        <main role="main" class="l-page__main">
			<!-- Company START -->
			<section class="p-about__company l-sec">
				<div class="c-ttlBox">
					<span class="c-ttl">Company</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">会社概要</h2>
					<table class="c-table">
						<tr>
							<th>会社</th>
							<td>Terra Motors株式会社</td>
						</tr>
						<tr>
							<th>設立</th>
							<td>2010年4月</td>
						</tr>
						<tr>
							<th>代表者</th>
							<td>上田 晃裕（代表取締役社長）</td>
						</tr>
						<tr>
							<th>資本金</th>
							<td>32億円（資本準備金含む）</td>
						</tr>
						<tr>
							<th>会社所在</th>
							<td>〒105-0023 東京都港区芝浦1-1-1 浜松町ビルディング12階</td>
						</tr>
						<tr>
							<th>連絡先</th>
							<td>info@terramotors.co.jp</td>
						</tr>
						<tr>
							<th>海外拠点</th>
							<td>インド、タイ</td>
						</tr>
						<tr>
							<th>事業内容</th>
							<td>EV充電インフラ事業、e-Mobility 事業、金融サービス事業、Connected E-Mobility プラットフォーム事業</td>
						</tr>
						<tr>
							<th>従業員数</th>
							<td>220名</td>
						</tr>
					</table>
				</div>
			</section>
			<!-- Company END -->

			<!-- Awards START -->
			<section class="p-about__awards l-sec">
				<div class="c-ttlBox">
					<span class="c-ttl">Awards</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">受賞履歴</h2>
					<table class="c-table --year">
						<tr>
							<th>2010</th>
							<td>第65回かわさき起業家オーディションビジネス・アイデアシーズ市場 起業家優秀賞受賞</td>
						</tr>
						<tr>
							<th>2010</th>
							<td>eco japan cup 2010 ビジネス部門 敢闘賞</td>
						</tr>
						<tr>
							<th>2011</th>
							<td>2011年度アントレプレナー・オブ・ザ・イヤー・ジャパン 日本代表候補</td>
						</tr>
						<tr>
							<th>2011</th>
							<td>本創生ビレッジ ビジネスコンテスト EGG JAPAN Innovation Cruiser Global賞最優秀企業</td>
						</tr>
						<tr>
							<th>2012</th>
							<td>Japan – U.S. Innovation in Business & Technology Awards 2012 ファイナリスト</td>
						</tr>
						<tr>
							<th>2012</th>
							<td>JAPAN Venture Award2012 中小企業庁長官賞</td>
						</tr>
						<tr>
							<th>2012</th>
							<td>横浜ビジネスグランプリ2012</td>
						</tr>
						<tr>
							<th>2013</th>
							<td>2012 Red Herring Top 100 Asia</td>
						</tr>
						<tr>
							<th>2013</th>
							<td>2012年度インデペンデンツクラブ大賞 第一位</td>
						</tr>
						<tr>
							<th>2013</th>
							<td>炭素杯2013 最優秀ソーシャルイノベーション賞 選出</td>
						</tr>
					</table>
				</div>
			</section>
			<!-- Awards END -->

			<!-- History START -->
			<section class="p-about__history l-sec">
				<div class="c-ttlBox">
					<span class="c-ttl">History</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">沿革</h2>
					<table class="c-table --year">
						<tr>
							<th>2010</th>
							<td>創業</td>
						</tr>
						<tr>
							<th>2012</th>
							<td>電動２輪シェア日本国内No.1（当時）達成</td>
						</tr>
						<tr>
							<th>2013</th>
							<td>世界発のスマホ同期モデルA4000iを発表</td>
						</tr>
						<tr>
							<th>2014</th>
							<td>インド法人設立・ネパール事業開始</td>
						</tr>
						<tr>
							<th>2015</th>
							<td>バングラデシュ法人設立</td>
						</tr>
						<tr>
							<th>2017</th>
							<td>年間EV販売台数が30,000台を突破</td>
						</tr>
						<tr>
							<th>2018</th>
							<td>インド現地販売店が250店舗を突破</td>
						</tr>
						<tr>
							<th>2021</th>
							<td>インドで金融サービス事業開始</td>
						</tr>
						<tr>
							<th>2022</th>
							<td>日本でEV充電インフラ事業開始</td>
						</tr>
						<tr>
							<th>2023</th>
							<td>インドでEV充電インフラ事業開始</td>
						</tr>
					</table>
				</div>
			</section>
			<!-- History END -->

			<!-- Executive Team START -->
			<section class="p-about__executive l-sec --bgImage">
				<div class="c-ttlBox">
					<span class="c-ttl">Executive Team</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">役員一覧</h2>
					<ul class="p-about__card-list">
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/executive01.jpg" alt="徳重 徹">
							<p class="p-about__card-position">Terra Motors株式会社 創業者</p>
							<p class="p-about__card-name">徳重 徹</p>
							<p class="p-about__card-text">1970年生まれ山口県出身、九州大学工学部卒。住友海上火災保険株式会社（当時）にて商品企画・経営企画に従事。退社後、米Thunderbird経営大学院にてMBAを取得し、シリコンバレーにてコア技術ベンチャーの投資・ハンズオン支援を行う。2010年にEV事業を展開するテラモーターズを起業、アジアを中心に年間3万台のEVを販売する事業に育て上げる。その後、2016年にはドローン事業を展開するテラドローンを設立し、世界で勝てる事業の創出へ挑んでいる。著書に『「メイド・バイ・ジャパン」逆襲の戦略』（PHP研究所）千葉大学大学院融合科学研究科非常勤講師。</p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/executive02.jpg" alt="上田 晃裕">
							<p class="p-about__card-position">Terra Motors 株式会社 代表取締役社長</p>
							<p class="p-about__card-name">上田 晃裕</p>
							<p class="p-about__card-text">桃山学院大学経済学部卒業後、2008年シャープ株式会社入社。<br>3年間の本社勤務を経て、UAEアラブ首長国連邦に赴任。その後、サウジアラビア、エジプト駐在を通じ中近東・アフリカ地域における家電事業拡大に従事。2015年3月Terra Motors株式会社に入社、営業責任者としてバングラデッシュ事業 を0から10億円事業へ育て上げる。その後、アジア4ヶ国統轄本部長を経て、現在インド事業の責任者を務める。</p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/executive03.jpg" alt="高橋 成典">
							<p class="p-about__card-position">Terra Motors 株式会社  取締役兼CTO</p>
							<p class="p-about__card-name">高橋 成典</p>
							<p class="p-about__card-text">芝浦工業大学工学部卒。大学在学中には空に夢中になり、人力飛行機の電装系の設計を担 当。 琵琶湖で行われた鳥人間コンテストにて準優勝、ゼロからつくりあげるものづくりの 面白さと醍醐味を学ぶ。2011年本田技研工業株式会社入社。生産の最前線に配属され、日 本のものづくりを体で学ぶ。その後、2014年テラモーターズに入社し、電動三輪用電池と 充電器の現地調査から開発を担当。インドにおいては、自社電動三輪および工場立ち上げ、 開発/品質保証/生産/アフター等のマネージを担当。開発を主導したモデルが大ヒットし、イ ンド事業売上10倍の原動力となる。2018年にCTO（最高技術責任者）、2019年10月に本社 役員に就任。</p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/executive04.jpg" alt="石井 一郎">
							<p class="p-about__card-position">Terra Motors 株式会社  社外取締役</p>
							<p class="p-about__card-name">石井 一郎</p>
							<p class="p-about__card-text">東京大学工学部卒業。1978年東京海上火災保険入社。1985年の米国現法（TMM）勤務から海外保険事業に関わり始める。2000年よりアジア地域のM&Aによる生損保事業の成長戦略をリードし、2001年にグループ初の海外生保会社（MLITH）をM&Aによりタイで立上げ、現地経営幹部社員と日本人アドバイザーの共同チームによる経営体制を導入。2008年東京海上ホールディングス海外事業企画部部長に就任し、海外保険事業のITとHRの機能強化のための新組織を立ち上げ。2015年東京海上ホールディングス専務取締役（海外保険事業統括）就任、2017年東京海上ホールディングス副社長就任。2020年、東京海上グループを離れ、デロイトトーマツ合同会社顧問就任。</p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/executive05.jpg" alt="余田 幸雄">
							<p class="p-about__card-position">Terra Motors 株式会社  常勤監査役</p>
							<p class="p-about__card-name">余田 幸雄</p>
							<p class="p-about__card-text">京都大学法学部卒業。1973年通産省入省。新エネルギー・産業技術総合開発機構（NEDO）出向後、在カナダ大使館商務・経済担当参事官を経て、1979年JETROサンフランシスコ所長就任。2000年財団法人安全保障貿易情報センター（CISTEC）専務理事就任。2002年京セラ株式会社入社。ベンチャー企業投資・M&A等を担当し、新規案件においてのビジネスプラン・収支見通し等の分析、経営トップの事業対応能力など投資判断のための評価を実施、SOX法対応のためグループのコーポレイトガバナンス、コンプライアンスの組織・仕組み作りなどに参画。2007年独立し、タスク・ヨダ設立。ベンチャー企業・中小企業のビジネス発展の総合的な経営および海外展開に関するコンサルティングを行う。2011年株式会社SOLEアドバイザー兼執行役員就任。</p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/executive06.jpg" alt="役員の写真">
							<p class="p-about__card-position">Terra Motors 株式会社  0000000</p>
							<p class="p-about__card-name">0000 00000</p>
							<p class="p-about__card-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/executive06.jpg" alt="役員の写真">
							<p class="p-about__card-position">Terra Motors 株式会社  0000000</p>
							<p class="p-about__card-name">0000 00000</p>
							<p class="p-about__card-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</li>
					</ul>
				</div>
			</section>
			<!-- Executive Team END -->

			<!-- Share Holders START -->
			<section class="p-about__shareholders l-sec --bgImage">
				<div class="c-ttlBox">
					<span class="c-ttl">Share Holders</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">株主</h2>
					<ul class="p-about__card-list --shareholders">
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/shareholders01.jpg" alt="村井 勝">
							<p class="p-about__card-position">元初代コンパック社長</p>
							<p class="p-about__card-name">村井 勝</p>
							<p class="p-about__card-logo"><img class="lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/shareholders01_logo.png" alt="COMPAQロゴ"></p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/shareholders02.jpg" alt="辻野 晃一郎">
							<p class="p-about__card-position">Google 日本法人 元代表取締役社長</p>
							<p class="p-about__card-name">辻野 晃一郎</p>
							<p class="p-about__card-logo"><img class="lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/shareholders02_logo.png" alt="Googleロゴ"></p>
						</li>
						<li class="p-about__card-item">
							<img class="p-about__card-img lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/shareholders03.jpg" alt="本田 圭佑">
							<p class="p-about__card-position">KSK Angel Fund Founder(CEO)</p>
							<p class="p-about__card-name">本田 圭佑</p>
						</li>
					</ul>
				</div>
			</section>
			<!-- Share Holders END -->

			<?php get_template_part('template-parts/parts/logos'); ?>

        </main>
        <!-- //// MAIN CONTENT END //// -->
</div>
	<?php get_template_part('template-parts/parts/cta'); ?>
    <?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->


<?php
get_footer();
