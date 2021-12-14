<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * 投稿にアイキャッチ画像が割り当てられているかチェック
 * @param string $size アイキャッチ画像の表示サイズ.
 * @return void
 */
function my_get_post_thumbnail($size)
{
  if (has_post_thumbnail()) {
    // アイキャッチ画像が設定されてれば大サイズで表示
    the_post_thumbnail($size);
  } else {
    // なければnoimage画像をデフォルトで表示
    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
  }
}

/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

/**
 * wp_nav_menuをカスタマイズする方法
 * liに付与される不要なclassやidを削除
 * 参考：https://wp-fan.com/wordpress/customize-wp_nav_menu/#walker
 */
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var)
{
  //残したいclassがある場合はarray()の中に指定
  return is_array($var) ? array_intersect($var, array('')) : '';
}

/**
 * wp_nav_menuをカスタマイズする方法
 * aタグにクラス付与
 * 参考：https://developer.wordpress.org/reference/hooks/nav_menu_link_attributes/
 */
function add_class_to_all_menu_anchors($atts)
{
  $atts['class'] = 'bl_tabNav_link';

  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10);

/**
 * wp_nav_menuをカスタマイズする方法
 * カスタムメニューの「タイトル属性」をアンカーテキストとして出力する方法
 * 参考：https://techmemo.biz/wordpress/walker_nav_menu_start_el/
 */
function attribute_add_nav_menu($item_output, $item)
{
  return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br><span>{$item->attr_title}</span><", $item_output);
}
add_filter('walker_nav_menu_start_el', 'attribute_add_nav_menu', 10, 4);

/**
 * custom_wp_pagenaviをカスタマイズする方法
 * 全体的に出力されるタグ・classを変更する
 * 参考：https://www.nxworld.net/wp-plugin-wp-pagenavi-custom-tag-and-class.html
 */
//customize the PageNavi HTML before it is output
function custom_wp_pagenavi( $html ) {
  $out = '';
  $out = str_replace( "<div class='wp-pagenavi' role='navigation'>", "", $html );
  $out = str_replace( "<a", "<li><a", $out );
  $out = str_replace( "</a>", "</a></li>", $out );
  $out = str_replace( "<span", "<li><span", $out );
  $out = str_replace( "</span>", "</span></li>", $out );
  $out = str_replace( "</div>", "", $out );

  return '<nav class="bl_pager"><ul class="bl_pager_inner">' . $out . '</ul></nav>';
}
add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );

function custom_wp_pagenavi_class( $class_name ) {
  switch( $class_name ) {
    case 'current':
      $class_name = 'bl_pager_link is_active';
      break;
    case 'page':
      $class_name = 'bl_pager_link';
      break;
    case 'previouspostslink':
      $class_name = 'bl_pager_link prev';
      break;
    case 'nextpostslink':
      $class_name = 'bl_pager_link next';
      break;
  }
  return $class_name;
}

add_filter( 'wp_pagenavi_class_current', 'custom_wp_pagenavi_class' );
add_filter( 'wp_pagenavi_class_page', 'custom_wp_pagenavi_class' );
add_filter( 'wp_pagenavi_class_previouspostslink', 'custom_wp_pagenavi_class' );
add_filter( 'wp_pagenavi_class_nextpostslink', 'custom_wp_pagenavi_class' );


/**
 * the_post_navigation() nav要素のカスタマイズ 
 * 
 * 参考：https://www.webdesignleaves.com/pr/wp/wp_func_pager.html
 */
function my_the_post_navigation( $args = array() ) {
  $args = wp_parse_args(
    $args,
    array(
      'prev_text'          => '<div class="bl_cta_icon">&lt;</div>
      <div class="bl_cta_txt">
      <time class="bl_cta_date" datetime="%date">%date</time>
      <div class="bl_cta_ttl">%title</div>
      </div>',
      'next_text'          => '<div class="bl_cta_icon">&gt;</div>
      <div class="bl_cta_txt">
      <time class="bl_cta_date" datetime="%date">%date</time>
      <div class="bl_cta_ttl">%title</div>
      </div>',
      'in_same_term'       => false,
      'excluded_terms'     => '',
      'taxonomy'           => 'category',
      'screen_reader_text' => __( 'Post navigation' ),
      )
    );
    
    $navigation = '';
    
    $previous = get_previous_post_link(
      // '<div class="nav-previous">%link</div>',
      '%link',
      $args['prev_text'],
      $args['in_same_term'],
      $args['excluded_terms'],
      $args['taxonomy']
    );
    
    $next = get_next_post_link(
      // '<div class="nav-next">%link</div>',
      '%link',
      $args['next_text'],
      $args['in_same_term'],
      $args['excluded_terms'],
      $args['taxonomy']
    );
    
    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
      $navigation = _navigation_markup( $previous . $next, 'post-navigation', $args['screen_reader_text'] );
    }
    
    return $navigation;
  }

 /**
 * the_post_navigation() nav要素のカスタマイズ 
 * 
 * 参考：https://www.webdesignleaves.com/pr/wp/wp_func_pager.html
 */
function my_navigation_markup($template){
  $template = '
    <nav class="bl_ctaWrapper %1$s" role="navigation" aria-label="%2$s">
    %3$s
    </nav>';
  
  return $template;
}
add_action( 'navigation_markup_template', 'my_navigation_markup' );

/**
 * 前後の投稿リンクをカスタマイズのaタグにクラス付与
 * 
 * 参考：https://www.nxworld.net/wp-add-class-previous-posts-link-and-next-posts-link.html
 */
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="bl_cta" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
  
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="bl_cta bl_cta__rev" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );


add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = '遷移先のページURL';
}, false );
</script>
EOD;
}