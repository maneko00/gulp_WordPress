<?php get_header(); ?>
<!-- /mv -->
<?php get_template_part('template-parts/mainVisual'); ?>

<main id="primary">
  <div class="ly_inner">
    <!-- breadcrumb -->
    <?php if (function_exists('bcn_display')) : ?>
      <div class="breadcrumb">
        <?php bcn_display(); ?>
      </div>
    <?php endif; ?>

    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>

        <div class="bl_newsSingle">
          <h2 class="el_lv1Heading">NEWS</h2>
          <article class="bl_card">
            <figure class="bl_card_imgWrapper">
              <?php my_get_post_thumbnail('large'); ?>
            </figure>
            <div class="bl_card_head">
              <time class="bl_card_date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
              <h3 class="bl_card_ttl">
                <?php the_title(); ?>
              </h3>
            </div>
            <div class="bl_card_body">
              <?php //本文の表示
              the_content(); ?>
            </div>
          </article>

          <?php echo my_the_post_navigation(); ?>
        </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</main>
<!-- /primary -->

<?php get_footer(); ?>