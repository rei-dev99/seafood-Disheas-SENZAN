<?php get_header('top'); ?>

    <div class="main-visual" data-aos="fade">
        <div class="main-visual__slide">
            <div class="main-visual__slide-picture"></div>
            <div class="main-visual__slide-picture"></div>
            <div class="main-visual__slide-picture"></div>
        </div>
        <p class="main-visual__content main-visual__content1">新鮮な海の幸</p>
        <p class="main-visual__content main-visual__content2">デカ盛りの魅力</p>
    </div>

    <div class="history" data-aos="fade">
        <div class="history-inner inner">
            <div class="history-content" data-aos="fade-up">
                <div class="history-title">
                    <p>美食の海</p>
                    <p>仙山へようこそ</p>
                </div>
                <div class="history-lead">
                    <p>海の幸の香り漂う仙山へようこそ</p>
                    <p>食材への深いこだわり、調理への情熱料理の魔法</p>
                    <p>料理長の手に宿る和の風景、美しい一杯</p>
                    <p>仙山でのひととき心に残ります</p>
                </div>
                <div class="history-lead">
                    <p>仙山は大正より<span>100</span>年以上続く</p>
                    <p>日本の美食の伝統と風格を守り続けてきた海鮮料理屋です</p>
                    <P>新鮮な海の幸と日本の料理文化に深い敬意を払い</p>
                    <P>お客様に特別なひとときを提供しています</p>
                </div>
                <div class="history-lead">
                    <p>仙山、名も無き詩のよう食べ、感じ、楽しむ場所</p>
                    <p>お越しをお待ちしております</p>
                    <p>貴方の特別なひととき、仙山で</p>
                </div>
                <div class="history-name">
                    <p>海鮮料理　仙山</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="about-inner">
            <div class="about-items">
                <div class="about-item">
                    <div class="about-picture" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about1.jpg" alt="メニューイメージ架空画像">
                    </div>
                    <div class="about-content" data-aos="fade-up">
                        <h2>新鮮な海鮮の宝庫<br>仙山のメニュー</h2>
                        <!-- <p>まるで時が止まったかのような、圧倒的な静寂のなかで、<br class="is-close__sp">ひたすらにゆったりと…。<br>最高級の「何もしない時間」をお過ごしください。</p> -->
                        <p>特製寿司、海鮮丼、焼き魚、刺身、天ぷら、デカ盛りメニューなど、<br>バラエティ豊かな料理がお待ちしています。<br>
                        日本の海から直接選ばれた食材で仕上げる仙山の料理は<br>美味しさと品質にこだわり抜かれています。<br>ぜひメニューページをご覧いただき新たな美食の冒険に出発しましょう。</p>
                        <div class="about-button"><a href="<?php echo esc_url( home_url('/menu')) ?>">メニューについて</a></div>
                    </div>
                </div>
                <div class="about-item">
                    <div class="about-picture" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-2.jpg" alt="架空料理イメージ画像">
                    </div>
                    <div class="about-content" data-aos="fade-up">
                        <h2>最新の情報と<br>美食の世界を探る</h2>
                        <p>料理への情熱や仙山の裏話を発見し、お店の魅力に迫ります。<br>
                        私たちのブログは、仙山の特別な体験を深め、<br>食の旅を豊かにする一歩となることでしょう。<br>
                        ぜひご覧いただき美食の世界への扉を開けてください。</p>
                        <div class="about-button"><a href="<?php echo esc_url( home_url('/blog')) ?>">ブログについて</a></div>
                    </div>
                </div>
                <div class="about-item">
                    <div class="about-picture" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about3.jpg" alt="架空温泉イメージ画像">
                    </div>
                    <div class="about-content" data-aos="fade-up">
                        <h2>和の風情漂う店内<br>仙山の雰囲気</h2>
                        <!-- <p>古くは弘法大師の病をも治療したと言われる温海の泉質。<br>現代人の疲弊しきった身体を修復する最高級の湯治場として<br class="is-close__sp">ご活用ください。</p> -->
                        <p>静かな和の空間、落ち着いた雰囲気、<br>そして伝統的な日本のデザインが特徴。<br>お食事をしながら、日本の美しさと落ち着きを感じることでしょう。<br>
                        また、お料理と共に美しい店内の雰囲気も楽しんでいただけます。<br>ぜひ店内の様子をご覧いただき特別なひとときを共有しましょう。</p>
                        <div class="about-button"><a href="<?php echo esc_url( home_url('/atmosphere')) ?>">雰囲気について</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="plan" class="plan" data-aos="fade">
        <div class="plan-inner">
          <h2 class="section-title">秋冬限定料理</h2>
          <div class="plan-items">
            <div class="plan-item" data-aos="fade-up">
              <div class="plan-picture">
                <?php if ( get_field( 'l_dishes1_i' ) ) : ?>
                <img src="<?php the_field( 'l_dishes1_i' ); ?>">
                <?php endif; ?>
            </div>
            <?php if ( get_field( 'l_dishes1_ti' ) ) : ?>
              <h3><?php the_field( 'l_dishes1_ti' ); ?></h3>
              <?php endif; ?>
              <?php if ( get_field( 'l_dishes1_te' ) ) : ?>
              <p><?php the_field( 'l_dishes1_te' ); ?></p>
              <?php endif; ?>
            </div>
            <div class="plan-item" data-aos="fade-up">
              <div class="plan-picture">
              <?php if ( get_field( 'l_dishes2_i' ) ) : ?>
                <img src="<?php the_field( 'l_dishes2_i' ); ?>">
                <?php endif; ?>
            </div>
            <?php if ( get_field( 'l_dishes2_ti' ) ) : ?>
              <h3><?php the_field( 'l_dishes2_ti' ); ?></h3>
              <?php endif; ?>
              <?php if ( get_field( 'l_dishes2_te' ) ) : ?>
              <p><?php the_field( 'l_dishes2_te' ); ?></p>
              <?php endif; ?>
            </div>
            <div class="plan-item" data-aos="fade-up">
              <div class="plan-picture">
              <?php if ( get_field( 'l_dishes3_i' ) ) : ?>
                <img src="<?php the_field( 'l_dishes3_i' ); ?>">
                <?php endif; ?>
            </div>
            <?php if ( get_field( 'l_dishes3_ti' ) ) : ?>
              <h3><?php the_field( 'l_dishes3_ti' ); ?></h3>
              <?php endif; ?>
              <?php if ( get_field( 'l_dishes3_te' ) ) : ?>
              <p><?php the_field( 'l_dishes3_te' ); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
  </section>

  <section class="news" data-aos="fade">
    <div class="news-inner inner">
        <h2 class="section-title">お知らせ</h2>
        <ul class="tab clearfix">
            <li class="active">営業情報</li>
            <li>ブログ</li>
        </ul>
        <div class="area">
            <div class="news-area show">
                <div class="news-items">
                <div class="news-left">
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link" href="#">
                                <div class="news-picture">
                                    <?php if ( get_field( 'info1_img' ) ) : ?>
                                    <img src="<?php the_field( 'info1_img' ); ?>" alt="ニュースイメージ架空画像">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date">
                                        <?php if ( get_field( 'info1_date' ) ) : ?>
                                        <time datetime="2020-12-24"><?php the_field( 'info1_date' ); ?></time>
                                        <?php endif; ?>
                                    </p>
                                    <?php if ( get_field( 'info1' ) ) : ?>
                                    <p class="news-lead"><?php the_field( 'info1' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link" href="#">
                                <div class="news-picture">
                                    <?php if ( get_field( 'info2_img' ) ) : ?>
                                    <img src="<?php the_field( 'info2_img' ); ?>" alt="ニュースイメージ架空画像">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date">
                                        <?php if ( get_field( 'info2_date' ) ) : ?>
                                        <time datetime="2020-12-24"><?php the_field( 'info2_date' ); ?></time>
                                        <?php endif; ?>
                                    </p>
                                    <?php if ( get_field( 'info2' ) ) : ?>
                                    <p class="news-lead"><?php the_field( 'info2' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link" href="#">
                                <div class="news-picture">
                                    <?php if ( get_field( 'info3_img' ) ) : ?>
                                    <img src="<?php the_field( 'info3_img' ); ?>" alt="ニュースイメージ架空画像">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date">
                                        <?php if ( get_field( 'info3_date' ) ) : ?>
                                        <time datetime="2020-12-24"><?php the_field( 'info3_date' ); ?></time>
                                        <?php endif; ?>
                                    </p>
                                    <?php if ( get_field( 'info3' ) ) : ?>
                                    <p class="news-lead"><?php the_field( 'info3' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-right">
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link" href="#">
                                <div class="news-picture">
                                    <?php if ( get_field( 'info4_img' ) ) : ?>
                                    <img src="<?php the_field( 'info4_img' ); ?>" alt="ニュースイメージ架空画像">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date">
                                        <?php if ( get_field( 'info4_date' ) ) : ?>
                                        <time datetime="2020-12-24"><?php the_field( 'info4_date' ); ?></time>
                                        <?php endif; ?>
                                    </p>
                                    <?php if ( get_field( 'info4' ) ) : ?>
                                    <p class="news-lead"><?php the_field( 'info4' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link" href="#">
                                <div class="news-picture">
                                    <?php if ( get_field( 'info5_img' ) ) : ?>
                                    <img src="<?php the_field( 'info5_img' ); ?>" alt="ニュースイメージ架空画像">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date">
                                        <?php if ( get_field( 'info5_date' ) ) : ?>
                                        <time datetime="2020-12-24"><?php the_field( 'info5_date' ); ?></time>
                                        <?php endif; ?>
                                    </p>
                                    <?php if ( get_field( 'info5' ) ) : ?>
                                    <p class="news-lead"><?php the_field( 'info5' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link" href="#">
                                <div class="news-picture">
                                    <?php if ( get_field( 'info6_img' ) ) : ?>
                                    <img src="<?php the_field( 'info6_img' ); ?>" alt="ニュースイメージ架空画像">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date">
                                        <?php if ( get_field( 'info6_date' ) ) : ?>
                                        <time datetime="2020-12-24"><?php the_field( 'info6_date' ); ?></time>
                                        <?php endif; ?>
                                    </p>
                                    <?php if ( get_field( 'info6' ) ) : ?>
                                    <p class="news-lead"><?php the_field( 'info6' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-area">
                <div class="news-items">
                <div class="news-left">
                <?php $pickup_query = new WP_Query(
                        array(
                        'post_type'      => 'post', // 投稿タイプ
                        'posts_per_page' => 3, // 3件取得
                        'tag' => 'pickup',
                        )
                    );
                    if ($pickup_query->have_posts()) :
                    while($pickup_query->have_posts()) :
                        $pickup_query->the_post();
                    ?>
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link">
                                <div class="news-picture">
                                <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
                                    <?php the_post_thumbnail(); ?>
                                    <?php else : // なければnoimage画像をデフォルトで表示 ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="ノーイメージ">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time></p>
                                    <p class="news-lead"><?php the_title(); // タイトルを表示 ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?> 
                    </div>

                    <div class="news-right">
                        <?php $pickup_query = new WP_Query(
                            array(
                            'post_type'      => 'post', // 投稿タイプ
                            'posts_per_page' => 3, // 3件取得
                            )
                        );
                        if ($pickup_query->have_posts()) :
                        while($pickup_query->have_posts()) :
                            $pickup_query->the_post();
                        ?>
                        <div class="news-item" data-aos="fade-up">
                            <div class="news-item-link">
                                <div class="news-picture">
                                <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
                                    <?php the_post_thumbnail(); ?>
                                    <?php else : // なければnoimage画像をデフォルトで表示 ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="ノーイメージ">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <p class="news-date"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time></p>
                                    <p class="news-lead"><?php the_title(); // タイトルを表示 ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="access" data-aos="fade">
    <div class="access-inner inner">
        <h2 class="section-title">アクセス</h2>
        <div class="access-row">
            <img class="access-picture" data-aos="fade-up" src="<?php echo get_template_directory_uri(); ?>/img/access.jpg" alt="アクセスイメージ架空画像">
            <div class="access-info" data-aos="fade-up">
                <dl>
                    <dt>住所</dt>
                    <dd>〒000-0000<br>山形県東根市xxxxxxxxxx</dd>
                    <dt>TEL/FAX</dt>
                    <dd>000-0000-0000/00-0000-0000</dd>
                    <dt>営業時間</dt>
                    <dd>12:00-22:00</dd>
                </dl>
                <p class="access-text">＊ネット予約は随時、お電話でのご予約は10:00〜11:00までの対応としております。</p>
            </div>
        </div>
        <div class="access-map" data-aos="fade-up">
            <div class="iframe-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50021.55721307168!2d140.4778346124671!3d38.41033748879434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8bd0a68233b527%3A0x8b997ce7c40714b6!2z44CSOTk5LTM3MjQg5bGx5b2i55yM5p2x5qC55biC6Zai5bGx!5e0!3m2!1sja!2sjp!4v1697503525950!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
  </section>

<?php get_footer(); ?>