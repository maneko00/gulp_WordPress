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
        
        <section class="cast bl_cast">
        <h2 class="el_lv1Heading">CAST</h2>
        <div class="bl_bulletListWrapper ly_inner">
          <ul class="bl_bulletList">
            <li>
              <figure class="bl_bulletList_imgWrapper">
                <img src="../img/toppage/cast1.png" alt="" />
              </figure>
              <p class="bl_bulletList_ttl">
                作・演出・振付・構成<br />
                <span>小池博史</span>
              </p>
              <p class="bl_bulletList_txt">
                茨城県日立市出身。一橋大学卒業。
                演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。
                1982年「パパ・タラフマラ」設立。
                演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。
                3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。
                著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
              </p>
            </li>
            <li>
              <figure class="bl_bulletList_imgWrapper">
                <img src="../img/toppage/cast2.png" alt="" />
              </figure>
              <p class="bl_bulletList_ttl">
                出演 <br />
                <span>白井さち子</span>
              </p>
              <p class="bl_bulletList_txt">
                7歳よりクラシックバレエを始める。
                82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。
                日本女子体育短期大学舞踊コース卒。
                在籍中、太田順造にパントマイムを師事。
                89年よりパパ・タラフマラに参加。 以降国内外の公演に出演。
                後身のパフォーマーのダンス指導にもあっている。
                パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。
                これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。
              </p>
            </li>
            <li>
              <figure class="bl_bulletList_imgWrapper">
                <img src="../img/toppage/cast3.png" alt="" />
              </figure>
              <p class="bl_bulletList_ttl">
                出演<br />
                <span>小谷野哲郎</span><br /><span class="small"
                  >(バリ舞踏)</span
                >
              </p>
              <p class="bl_bulletList_txt">
                東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。
                1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。
                学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。
                2006年、Asian Cultural Councilの助成によりアメリカに滞在。
                パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。
              </p>
            </li>
          </ul>
        </div>
        <!-- <div class="bl_cast_more">
            <a class="el_btn el_btn__rev el_btn__s" href="#">もっと見る</a>
          </div> -->
      </section>

      <div class="ly_inner">
        <ul class="bl_bulletList info">
          <li>
            <figure class="bl_cast_imgWrapper">
              <img src="../img/toppage/cast2.png" alt="" />
            </figure>
            <div class="bl_bulletList_castName">
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
              <p class="bl_bulletList_prof">7歳よりクラシックバレエを始める。
              82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。
              日本女子体育短期大学舞踊コース卒。
              在籍中、太田順造にパントマイムを師事。
              89年よりパパ・タラフマラに参加。 以降国内外の公演に出演。
              後身のパフォーマーのダンス指導にもあっている。
              パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。
              これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。</p>
            </div>
          </li>
          <li>
            <figure class="bl_cast_imgWrapper">
              <img src="../img/toppage/cast2.png" alt="" />
            </figure>
            <div class="bl_bulletList_castName">
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
              <p class="bl_bulletList_prof">7歳よりクラシックバレエを始める。
              82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。
              日本女子体育短期大学舞踊コース卒。
              在籍中、太田順造にパントマイムを師事。
              89年よりパパ・タラフマラに参加。 以降国内外の公演に出演。
              後身のパフォーマーのダンス指導にもあっている。
              パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。
              これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。</p>
            </div>
          </li>
          <li>
            <figure class="bl_cast_imgWrapper">
              <img src="../img/toppage/cast2.png" alt="" />
            </figure>
            <div class="bl_bulletList_castName">
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
              <p class="bl_bulletList_prof">7歳よりクラシックバレエを始める。
              82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。
              日本女子体育短期大学舞踊コース卒。
              在籍中、太田順造にパントマイムを師事。
              89年よりパパ・タラフマラに参加。 以降国内外の公演に出演。
              後身のパフォーマーのダンス指導にもあっている。
              パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。
              これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。</p>
            </div>
          </li>
          <li>
            <figure class="bl_cast_imgWrapper">
              <img src="../img/toppage/cast2.png" alt="" />
            </figure>
            <div class="bl_bulletList_castName">
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
              <p class="bl_bulletList_prof">7歳よりクラシックバレエを始める。
              82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。
              日本女子体育短期大学舞踊コース卒。
              在籍中、太田順造にパントマイムを師事。
              89年よりパパ・タラフマラに参加。 以降国内外の公演に出演。
              後身のパフォーマーのダンス指導にもあっている。
              パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。
              これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="ly_bg">
        <div class="ly_inner">
          <ul class="cast bl_bulletList">
            <li>
              <p class="bl_bulletList_type">作・演出・振付・構成</p>
              <h2 class="bl_bulletList_name">小池博史</h2>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">小谷野哲郎</h2>
              <p class="bl_bulletList_sub">(パリ舞台)</p>
            </li>
            <li>
              <p class="bl_bulletList_type">作・演出・振付・構成</p>
              <h2 class="bl_bulletList_name">小池博史</h2>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">小谷野哲郎</h2>
              <p class="bl_bulletList_sub">(パリ舞台)</p>
            </li>
            <li>
              <p class="bl_bulletList_type">作・演出・振付・構成</p>
              <h2 class="bl_bulletList_name">小池博史</h2>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">小谷野哲郎</h2>
              <p class="bl_bulletList_sub">(パリ舞台)</p>
            </li>
            <li>
              <p class="bl_bulletList_type">作・演出・振付・構成</p>
              <h2 class="bl_bulletList_name">小池博史</h2>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">白井さち子</h2>
              <p class="bl_bulletList_sub">(バレエ、コンテンポラリーダンス)</p>
            </li>
            <li>
              <p class="bl_bulletList_type">出演</p>
              <h2 class="bl_bulletList_name">小谷野哲郎</h2>
              <p class="bl_bulletList_sub">(パリ舞台)</p>
            </li>
          </ul>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
