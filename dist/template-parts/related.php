  <!-- 関連記事参考サイト -->
	<!-- https://www.ozlink.co.jp/lab/511/ -->
  
	<div class="entry-related">
	  <div class="related-title">関連記事</div>
	  <?php if (has_category()) {
      $post_cats = get_the_category();
      $cats_ids = array();
      //所属カテゴリーのIDリストを作っておく
      foreach ($post_cats as $cat) {
        $cat_ids[] = $cat->term_id;
      }
    }
    $myposts = get_posts(array(
      'post_type' => 'post', // 投稿タイプ
      'posts_per_page' => '8', // ８件を取得
      'post__not_in' => array($post->ID), // 表示中の投稿を除外
      'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
      'orderby' => 'rand' // ランダムに
    ));
    if ($myposts) : //<?php if (条件):
    ?>
	    <!-- 以下，条件が真の場合に実行するHTMLコード -->
	    <div class="related-items">
	      <?php foreach ($myposts as $post) : setup_postdata($post); // グローバル変数$postを書き換え 
        ?>
	        <a class="related-item" href="<?php the_permalink(); //記事のリンクを表示 
                                        ?>">
	          <div class="related-item-img">
             <?php my_get_post_thumbnail('medium'); ?>
	            <!-- <img src="img/entry1.png" alt=""> -->
	          </div><!-- /related-item-img -->
	          <div class="related-item-title"><?php the_title(); ?></div><!-- /related-item-title -->
	        </a><!-- /related-item -->
	      <?php endforeach;
        wp_reset_postdata(); //$postをグローバル変数に戻す 
        ?>
	    </div><!-- /related-items -->
	  <?php endif; ?>
	</div><!-- /entry-related -->