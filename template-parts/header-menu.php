<?php
wp_nav_menu(
    array(
    'depth' => 1,
    'theme_location' => 'header', // ヘッダーメニューをここに表示すると指定
    'container' => '', // ulを囲むdivタグにクラスを与えるか
    'menu_class' => 'header-nav', // ulにクラス付けをするか
    )
);
?>