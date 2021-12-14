<?php get_header(); ?>
	<div class="bl_jumbotron">
		<div class="bl_jumbotron_inner">
			<div class="bl_jumbotron_cont">
				<p class="bl_jumbotron_lead"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/世界最長の叙事詩をピーター・ブルック以来の全編舞台化.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化"></p>
					<h2 class="bl_jumbotron_ttl"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/完全版マハーバーラタ.png" alt="完全版マハーバーラタ"></h2>
				<!-- </div> -->
				<div class="bl_jumbotron_body">
					<div class="bl_jumbotron_info"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/アウトライン化テキスト(見出しミンM31).png" alt="2020年7月4日～7日なかのZERO大ホール"></div>
					<p class="bl_jumbotron_txt">
						小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
						アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
					</p>
				</div>
				<a class="el_btn" href="<?php echo esc_url( home_url('news')); ?>">チケット予約サイトへ</a>
			</div>
		</div>
	</div>
	<!-- /.bl_jumbotron -->

	<main id="primary">
	<?php //if ( have_posts() ) : ?>
		<div class="ly_inner">
			<section class="bl_intro">
				<div class="bl_intro_bgMask">
					<figure class="bl_intro_imgWrapper">
						<img src="<?php echo get_template_directory_uri() ?>/img/toppage/intro1.png" alt="">
					</figure>
					
					<div class="bl_intro_cont">
						<h2 class="el_lv1Heading">INTRODUCTION</h2>
						<div class="bl_intro_lead">なぜ今「マハーバーラタ」なのか？</div>
						<div class="bl_intro_txt">
							<p class="bl_intro_txtLR">
								「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
								それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。 平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
							</p>
							<p class="bl_intro_txtLR">		
								現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
								神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
								非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
							</p>
						</div>
					</div>
				</div>
			</section><!-- /.bl_introduction -->		
			<div class="hp_mdSpace"></div>
			<section class="news">
				<h2 class="el_lv1Heading">NEWS</h2>
				<div class="bl_cardUnit_top">
					<?php 
					// while (have_posts()): the_post(); 
					?>
					<?php $pickup_posts = get_posts( array(
						'post_type' => 'post', // 投稿タイプ
						'posts_per_page' => '5', // 3件取得
						'orderby' => 'DESC', // 新しい順に
					));?>
					<?php foreach ( $pickup_posts as $post ) : setup_postdata( $post ); ?>

					<!-- 記事ここから -->
					<a class="bl_card" href="<?php the_permalink(); ?>">
						<figure class="bl_card_imgWrapper"><?php my_get_post_thumbnail('large'); ?></figure>
						<div class="bl_card_body">
							<time class="bl_card_date" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j'); ?></time>
							<h3 class="bl_card_ttl"><?php the_title(); ?></h3>
						</div>
					</a>
					<!-- 記事ここまで -->
					<?php endforeach; wp_reset_postdata(); ?>
				</div><!-- /bl_cardUnit_top -->
				<?php// endif; ?>

				<div class="bl_news_footer">
					<a class="el_btn" href="<?php echo esc_url( home_url('news')); ?>">ニュース一覧へ</a>
				</div>
			</section> 
			<!-- /.card -->
		</div>

		<section class="bl_story">
			<div class="bl_story_inner">
				<h2 class="el_lv1Heading">STORY</h2>
				<div class="bl_story_cont">
					<p class="bl_story_txt">
							マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
							世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
						</p>
				</div>
				<div class="bl_story_footer">
					<a class="el_btn" href="<?php echo esc_url( home_url('story')); ?>">もっと詳しく</a>
				</div>
			</div>
		</section>

		<div class="ly_inner">
			<section class="bl_comments">
				<h2 class="el_lv1Heading">COMMENTS</h2>
				<div class="bl_comments_lead">舞台関係者のみならず各界著名人からコメントが届いています！</div>
				<article class="bl_media">
					<figure class="bl_media_imgWrapper">
						<img src="<?php echo get_template_directory_uri() ?>/img/toppage/comments.png" alt="">
					</figure>
					<div class="bl_media_body">
						<h3 class="bl_media_ttl">京都佛立ミュージアム館長 <span class="large">長松清潤</span></h3>
						<p class="bl_media_txt">
							「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
							まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
						</p>
						<div class="bl_media_more">
							<a class="el_btn" href="<?php echo esc_url( home_url('comments')); ?>" >もっと見る</a>
						</div>
					</div>
					<!-- /.bl_media_body -->
				</article>
				<!-- /.bl_media -->
			</section>
		</div>
			
		<section class="bl_cast">
			<h2 class="el_lv1Heading">CAST</h2>
			<div class="bl_bulletListWrapper ly_inner">
				<ul class="bl_bulletList">
					<li>
						<figure class="bl_bulletList_imgWrapper">
							<img src="<?php echo get_template_directory_uri() ?>/img/toppage/cast1.png" alt="">
						</figure>
						<p class="bl_bulletList_ttl">
							作・演出・振付・構成<br> <span>小池博史</span>
						</p>
						<p class="bl_bulletList_txt">
							茨城県日立市出身。一橋大学卒業。 演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。 1982年「パパ・タラフマラ」設立。 演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。 3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。 著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
						</p>
					</li>
					<li>
						<figure class="bl_bulletList_imgWrapper">
							<img src="<?php echo get_template_directory_uri() ?>/img/toppage/cast2.png" alt="">
						</figure>
						<p class="bl_bulletList_ttl">
							出演 <br> <span>白井さち子</span>
						</p>
						<p class="bl_bulletList_txt">
							7歳よりクラシックバレエを始める。 82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。 日本女子体育短期大学舞踊コース卒。 在籍中、太田順造にパントマイムを師事。 89年よりパパ・タラフマラに参加。 以降国内外の公演に出演。 後身のパフォーマーのダンス指導にもあっている。 パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。 これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。
						</p>
					</li>
					<li>
						<figure class="bl_bulletList_imgWrapper">
							<img src="<?php echo get_template_directory_uri() ?>/img/toppage/cast3.png" alt="">
						</figure>
						<p class="bl_bulletList_ttl">
							出演<br> <span>小谷野哲郎</span><br><span class="small">(バリ舞踏)</span>
						</p>
						<p class="bl_bulletList_txt">
							東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。 1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。 学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。 2006年、Asian Cultural Councilの助成によりアメリカに滞在。 パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。
						</p>
					</li>
				</ul>			
			</div>
			<div class="bl_cast_more">
				<a class="el_btn el_btn__rev el_btn__s" href="<?php echo esc_url( home_url('casts')); ?>">もっと見る</a>
			</div>
		</section>
	</main>	

<?php get_footer(); ?>
