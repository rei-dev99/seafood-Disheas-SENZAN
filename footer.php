<footer class="footer" data-aos="fade">
      <div class="footer-top">
        <div class="inner">
            <?php
            wp_nav_menu(
                array(
                'depth' => 1,
                'theme_location' => 'footer', // ヘッダーメニューをここに表示すると指定
                'container' => '', // ulを囲むdivタグにクラスを与えるか
                'menu_class' => 'footer-list', // ulにクラス付けをするか
                )
            );
            ?>

            <div class="footer-logo"><a href="<?php echo esc_url( home_url('/')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logos.png" alt="フッターロゴ"></a></div>
            <div class="footer-info">
                <div class="footer-address">
                    <p><span>〒000-0000</span><span>山形県東根市xxxxxxxxxxx</span></p>
                </div>
                <div class="footer-tel">
                    <p><span>TEL.000-0000-0000</span><span>FAX.00-0000-0000</span></p>
                </div>
            </div>
        </div>
      </div>  
      <div class="footer-bottom">
          <p>Copyright &copy; 仙山 All Rights Reserved.</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>