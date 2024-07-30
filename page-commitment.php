<?php get_header(); ?>

    <div class="header-visual room" data-aos="fade">
        <h2 class="header-visual__logo"><?php the_title(); ?></h2>
    </div>
    <div class="contents">
    <?php get_template_part('template-parts/breadcrumb'); ?>
        <p class="contents-text" data-aos="fade">仙山のこだわりページへようこそ。<br>ここでは、和の風情、四季の美しさ、そして静寂と美の共鳴が広がります。<br>庭園の緑、畳の部屋、伝統的なデザインが、日本の文化と美意識を感じさせます。<br>仙山の静かな雰囲気で、美味しい料理と共に、特別なひとときをお楽しみください。</p>
        <div class="contents-items">
            <div class="contents-item" data-aos="fade-up">
                <div class="contents-box__picture" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/img/heya1.jpg" alt="雰囲気1つ目イメージ架空画像"></div>
                <div class="contents-box__content">
                  <h2 class="contents-box__title">和の調べ</h2>
                  <p class="contents-box__text">仙山は和の風情に包まれた場所です。<br>美しい庭園、畳の部屋、伝統的なデザインが、訪れる人々に日本の文化と美意識を伝えます。ここでのひとときは、和の調べに耳を傾けるような感覚です。</p>
                  <p class="contents-box__attention">＊和を堪能しながらゆっくりとおくつろぎください。</p>
                </div>
            </div>
            <div class="contents-item" data-aos="fade-up">
                <div class="contents-box__picture" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/img/heya2.jpg" alt="雰囲気2つ目イメージ架空画像"></div>
                <div class="contents-box__content">
                  <h2 class="contents-box__title">四季折々の景色</h2>
                  <p class="contents-box__text">仙山の窓から見える景色は、季節ごとに美しさを変えます。<br>桜の花が咲く春、海の青が広がる夏、紅葉が鮮やかな秋、雪景色の冬。四季を通じて変わる景色が、訪れる人々を魅了します。</p>
                  <p class="contents-box__attention">＊部屋ごとに見える景色が変わります。<br>＊部屋の指定も可能です。</p>
                </div>
            </div>
            <div class="contents-item" data-aos="fade-up">
                <div class="contents-box__picture" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/img/heya3.jpg" alt="雰囲気3つ目イメージ架空画像"></div>
                <div class="contents-box__content">
                  <h2 class="contents-box__title">静寂と美の共鳴</h2>
                  <p class="contents-box__text">仙山は、静かな雰囲気と美の共鳴が特徴です。<br>落ち着いた空間で食事を楽しむことで、料理の美味しさが一層引き立ちます。ここでのひとときは、美と静寂の調和を感じる特別な瞬間です。</p>
                  <p class="contents-box__attention">＊最高の空間で癒されてください。</p>
                </div>
            </div>
        </div>
        <div class="effect" data-aos="fade-up">
          <h2 class="effect-title">座席一覧</h2>
          <dl class="effect-items">
            <div class="effect-item">
              <dt>個室</dt>
              <dd>4部屋(4名〜8名)</dd>
            </div>
            <div class="effect-item">
              <dt>テーブル席</dt>
              <dd>5席(4名)</dd>
            </div>
            <div class="effect-item">
              <dt>お座敷</dt>
              <dd>5席(4名)</dd>
            </div>
          </dl>
        </div>

    </div>

    <?php get_footer(); ?>