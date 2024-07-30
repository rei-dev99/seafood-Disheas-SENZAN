<?php get_header(); ?>

    <div class="header-visual blog" data-aos="fade">
        <h2 class="header-visual__logo">ブログ</h2>
    </div>
    <div class="contents contents-blog">

    <?php get_template_part('template-parts/breadcrumb'); ?>

        <p class="contents-text" data-aos="fade-up">仙山のブログへようこそ。<br>新鮮な海の幸、伝統的な和の雰囲気、そして料理の裏話に触れる場所です。<br>美食の冒険と日本の伝統を共に探求しましょう。<br>新たな味わいや情報を見逃さないよう、ブログを定期的にご覧ください。お楽しみに。</p>

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