<?php
// 外部ファイル読み込み
function my_script_init() {
    wp_enqueue_style("aos-css", "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), "2.3.1", 'all');
    wp_enqueue_script("aos-js", "https://unpkg.com/aos@2.3.1/dist/aos.js", array("jquery"), '2.3.1', true);

    wp_enqueue_style("flatpickr.css", "https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css", array(), "", false);
    wp_enqueue_script("flatpickr.js", "https://cdn.jsdelivr.net/npm/flatpickr", array(), "", true);

    wp_enqueue_style("font-awesome-css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", array(), "6.4.2", "all");
    wp_enqueue_script("font-awesome-js", "https://kit.fontawesome.com/74fcf6a229.js", array(), "", "all");

    
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
  }
  add_action("wp_enqueue_scripts", "my_script_init");


// 標準機能のセットアップ
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");


// メニュー登録
function my_menu() {
  register_nav_menus(
    array(
      'header' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu');


?>