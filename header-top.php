<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="仙山 - 海鮮の楽園へようこそ！ここでは新鮮な海の幸とデカ盛りの魅力が融合します。">
    <meta name="robots" content="noindex" /><!-- 検索されないようにする -->
    <title>海鮮料理｜仙山</title>
    <?php wp_head(); ?>
</head>

<body> 
    <!-- ローディング用HTML -->
    <div class="loader-bg">
        <div class="loader">
            <img src="<?php echo get_template_directory_uri(); ?>/img/white-logo.png" alt="ロゴ">
        </div>
    </div>
    <!-- ローディング用HTML ここまで -->

    <!-- マウスストーカー -->
    <?php get_template_part('template-parts/mouse-stkr'); ?>

    <header class="header__main-page" data-aos="fade">
      <div class="header-inner inner">
        <h1 class="header__main-logo"><a href="<?php echo esc_url( home_url('/')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/test3.png" alt="海鮮料理｜仙山"></a></h1>
        
        <?php get_template_part('template-parts/header-menu'); ?>

        <div id="openModal" class="modal-button"><a href="#">ご予約はこちら</a></div><!-- モーダルを開くボタン -->
      </div>
    </header>

    <!-- スクロールすると上から出現するヘッダー -->
    <header class="header__main-page-fixed">
        <div class="header-inner inner">
          <h1 class="header__lower-logo"><a href="./index.html"><img class="header__lower-logo-img" src="<?php echo get_template_directory_uri(); ?>/img/test3.png" alt="海鮮料理｜仙山"></a></h1>

          <?php get_template_part('template-parts/header-menu'); ?>

          <div id="openModal" class="modal-button"><a href="#">ご予約はこちら</a></div><!-- モーダルを開くボタン -->
        </div>
    </header>

    <?php get_template_part('template-parts/modal'); ?>
    
    <?php get_template_part('template-parts/drawer'); ?>