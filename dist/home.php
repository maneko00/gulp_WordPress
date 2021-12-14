<?php get_header(); ?>
<?php get_template_part('template-parts/mainVisual'); ?>

    <main id="primary">
      <div class="ly_inner">
        <!-- breadcrumb -->
        <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
          <?php bcn_display(); ?>
        </div>
        <?php endif; ?>
        

        <div class="bl_newsArchive">
          <h2 class="el_lv1Heading">NEWS</h2>
          <?php if ( have_posts() ) : ?>
          <div class="bl_cardUnit">
            <?php while ( have_posts() ) : the_post(); ?>
            <a class="bl_card" href="<?php the_permalink(); ?>">
              <figure class="bl_card_imgWrapper">
                <?php my_get_post_thumbnail('large'); ?>
              </figure>
              <div class="bl_card_body">
                <time class="bl_card_date" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j'); ?></time
                >
                <h3 class="bl_card_ttl">
                  <?php the_title(); ?>
                </h3>
              </div>
            </a>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
        </div>
        <!-- /.card -->
        <?php wp_pagenavi(); ?>
      </div>
    </main>

<?php get_footer(); ?>
