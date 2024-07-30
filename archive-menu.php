<?php get_header(); ?>

    <div class="header-visual food" data-aos="fade">
        <h2 class="header-visual__logo">メニュー</h2>
    </div>

    <div class="contents">
    <?php get_template_part('template-parts/breadcrumb'); ?>

        <p class="contents-text" data-aos="fade">仙山のメニューページへようこそ。<br>新鮮な海の幸と日本の料理の宝庫がここに広がります。<br>季節ごとの食材を活かし、伝統の味わいとモダンなアプローチを組み合わせた料理は、日本の美食を体現しています。<br>メニューページで仙山の多彩な料理の世界に足を踏み入れ、新たな味わいを発見しましょう。</p>
        <div class="contents-items">
            <?php
            if(have_posts()):
            while(have_posts()):
                the_post();
            ?>
            <div class="contents-item blog-item" data-aos="fade-up">
                <div class="contents-box__picture blog-picture" data-aos="fade-up">
                <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
                  <?php the_post_thumbnail(); ?>
                  <?php else : // なければnoimage画像をデフォルトで表示 ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="ノーイメージ">
                  <?php endif; ?>
                </div>
                <div class="contents-box__content content-blog" data-aos="fade-up">
                  <h2 class="contents-box__title"><?php the_title(); ?></h2>
                  <p class="contents-box__text"><?php echo wp_trim_words( get_the_content(), 100, '…' ); ?></p>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php get_template_part('template-parts/pagination'); ?>
    </div>

    <?php get_footer(); ?>