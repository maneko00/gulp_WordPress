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

    <div class="bl_inquiry">
      <h2 class="el_lv1Heading">INQUIRY</h2>
      <div class="bl_inquiry_cont">
        <p id="js_inquiry_txt" class="bl_inquiry_txt">
          小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br />
          公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br />
          お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
        </p>
        <!-- 変数に代入 -->
        <?php $get_form = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1))[0]; ?>
        <div class="bl_form">
          <!-- フォームの中身 -->
          <?php echo do_shortcode( '[contact-form-7 html_id="js_contactForm" id="'.$get_form->ID.'" title="'.$get_form->post_title.'"]' ); ?>
          <?php //echo do_shortcode( '[contact-form-7 id="66" title="コンタクトフォーム 1"]' ); ?>
          <!-- <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSfr8_HlX1oE_zQOT1oEI2NdgWsY5S4dQJVRclMPG4BG3KZdQQ/formResponse" method="POST" id="js_contactForm">
            <dl class="bl_form_txtWrapper">
              <div class="bl_form_txt">
                <dt>
                  <label class="bl_form_label" for="name">お名前</label>
                </dt>
                <dd>
                  <input class="js_require" name="entry.1720817539" id="name" type="text" placeholder="お名前" />
                </dd>
              </div>
              <div class="bl_form_txt">
                <dt>
                  <label class="bl_form_label" for="tel">電話番号</label>
                </dt>
                <dd>
                  <input class="js_require" name="emailAddress" id="tel" type="tel" placeholder="080-0000-0000" />
                </dd>
              </div>
              <div class="bl_form_txt">
                <dt>
                  <label class="bl_form_label" for="email">メールアドレス</label>
                </dt>
                <dd>
                  <input class="js_require" name="emailAddress" id="email" type="email" placeholder="sample@gmail.com" />
                </dd>
              </div>
              <div class="bl_form_txt">
                <dt>
                  <label class="bl_form_label" for="comments">内容</label>
                </dt>
                <dd>
                  <textarea class="js_require" name="entry.61034735" id="comments" rows="4" placeholder=""></textarea>
                </dd>
              </div>
            </dl>
            <div class="bl_form_submit">
              <button id="js_submit" class="el_formBtn -submit" type="submit" disabled>
                送信する
              </button>
            </div>
          </form> -->
          <div id="js_success" class="bl_inquiry_massage">
            <p>
              お問い合わせありがとうございました。<br />
              メッセージは正常に送信されました。
            </p>
          </div>
        </div>
        <div id="js_error" class="bl_inquiry_massage -error">
          <p>送信に失敗しました。ページを更新して再度送信してください。</p>
        </div>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>