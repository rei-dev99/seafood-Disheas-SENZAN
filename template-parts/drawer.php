<!-- ドロワーメニュー -->
<div class="drawer-icon" data-aos="fade-left">
      <div class="drawer-icon-bars">
        <div class="drawer-icon-bar1 top-drawer"></div>
        <div class="drawer-icon-bar2 top-drawer"></div>
        <div class="drawer-icon-bar3 top-drawer"></div>
      </div>
    </div>
    <div id="#drawer" class="drawer-content">
        <h2 class="drawer-logo"><a href="./index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/test3.png" alt="海鮮料理｜仙山"></a></h2>
        <h3 class="drawer-content-title">CONTENTS</h3>

        <?php
          wp_nav_menu(
              array(
              'depth' => 1,
              'theme_location' => 'drawer', // ドロワーメニューをここに表示すると指定
              'container' => '', // ulを囲むdivタグにクラスを与えるか
              'menu_class' => 'drawer-content-items', // ulにクラス付けをするか
              )
          );
          ?>
          
        <div class="drawer-info">
            <h3 class="drawer-info-title">INFORMATION</h3>
            <p class="drawer-tel">TEL.000-0000-0000</p>
            <p class="drawer-fax">FAX.00-0000-0000</p>
            <p class="drawer-adress1">〒000-0000</p>
            <p class="drawer-adress2">山形県東根市xxxxxxxxxxx</p>
        </div>
    </div>
    <div class="drawer-background top-background"></div>