<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マハーバーラタ</title>
		<meta name="description" content="サイトの概要文">
		<!-- wow -->
    <!-- <script src="../js/wow.min.js"></script> -->
    <!-- <link rel="stylesheet" href="../css/animate.css"> -->
		
    <!-- original -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <?php wp_head(); ?>
  </head>
	
<body>

	<!-- header -->
  <header class="ly_header">
		<div class="ly_inner">
				<!-- <nav class="bl_tabNav">
					<ul>
						<li><a class="bl_tabNav_link" href="/">トップ<br><span>top</span></a></li>
						<li><a class="bl_tabNav_link" href="/sub/news-archive.html">ニュース<br><span>news</span></a></li>
						<li><a class="bl_tabNav_link" href="/sub/story.html">ストーリー<br><span>story</span></a></li>
						<li><a class="bl_tabNav_link" href="/sub/comments.html">著名人コメント<br><span>comments</span></a></li>
						<li><a class="bl_tabNav_link" href="/sub/cast.html">キャスト<br><span>cast</span></a></li>
						<li><a class="bl_tabNav_link" href="/sub/inguiry.html">問い合わせ<br><span>inquiry</span></a></li>
					</ul>
				</nav> -->
				<?php
			wp_nav_menu(
				//.bl_tabNavを置き換えて、PC用メニューを動的に表示する
				array(
					'depth' => 1,
					'theme_location' => 'global', //グローバルメニューをここに表示すると指定
					'container' => 'nav',
					'container_class' => 'bl_tabNav',
					'menu_class' => '',
					'menu_id'    => '',
					'items_wrap' => '<ul>%3$s</ul>',
				)

			);
			?>
		</div><!-- /inner -->
	</header><!-- /header -->

	<!-- drawer -->
	<div class="bl_drawer_icon js_drawer_icon ">
		<div class="bl_drawer_iconBars">
			<div class="bl_drawer_iconBar1"></div>
			<div class="bl_drawer_iconBar2"></div>
			<div class="bl_drawer_iconBar3"></div>
		</div>
	</div><!-- /drawer -->

	<!-- drawer-content -->
	<div class="bl_drawer_cont js_drawer_cont">
		<div class="bl_drawer_cont_items">
			<div class="bl_drawer_cont_item"><a href="/">トップ</a></div>
			<div class="bl_drawer_cont_item"><a href="/sub/news-archive.html">ニュース</a></div>
			<div class="bl_drawer_cont_item"><a href="/sub/story.html">ストーリー</a></div>
			<div class="bl_drawer_cont_item"><a href="/sub/comments.html">著名人コメント</a></div>
			<div class="bl_drawer_cont_item"><a href="/sub/cast.html">キャスト</a></div>
			<div class="bl_drawer_cont_item"><a href="/sub/inguiry.html">問い合わせ</a></div>
		</div>
	</div><!-- /drawer-content -->
	<?php
			// wp_nav_menu(
			// 	//.bl_tabNavを置き換えて、PC用メニューを動的に表示する
			// 	array(
			// 		'depth' => 1,
			// 		'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
			// 		'container' => 'nav',
			// 		'container_class' => 'bl_drawer_cont, js_drawer_cont',
			// 		'menu_class' => 'bl_drawer_cont_items',
			// 		'menu_id'    => '',
			// 		'items_wrap' => '<ul>%3$s</ul>',
			// 	)

			// );
			?>
	<div class="bl_drawer_bg js_drawer_bg"></div>