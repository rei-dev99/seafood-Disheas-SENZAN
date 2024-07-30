// AOS.js読み込み
AOS.init({
    duration: 1500
});
// flatpickr
flatpickr('#flatpickr', {
    minDate: 'today', // 今日の日付以降選択できる
    // mode: "multiple", // 複数の日付を選択できる
    mode: "range" // 期間を設定できる
});

// マウスストーカー
jQuery(function(){
    const mouse = jQuery("#js-mouse");
    jQuery(document).on("mousemove",function(e){
        const x=e.clientX;
        const y=e.clientY;
        mouse.css({
            "opacity": "1",
            "transform": "translate(" + x + "px," + y + "px)",
        });
        jQuery("a").on({
            "mouseenter": function() {
                mouse.addClass("js-hover");
            },
            "mouseleave": function() {
                mouse.removeClass("js-hover");
            }
        });
    });
});

// ローディング
jQuery(function(){
    jQuery(window).on('load',function(){
        jQuery('.loader').delay(500).fadeOut(500);
        jQuery('.loader-bg').delay(800).fadeOut(700);
    });
    setTimeout(function(){
        jQuery('.loader-bg').fadeOut(500);
    },5000);
});

// トップページからスクロールしたらヘッダーを上からぬるりと表示させる
var headNav = jQuery(".header__main-page-fixed");
/* 初期表示、スクロール時にイベント開始 */
jQuery(window).on("load scroll", function () {
    /* スクロール位置の高さが100pxより大きい、かつis-fixedクラスがない場合 */
    if (jQuery(this).scrollTop() > 100 && headNav.hasClass("is-fixed") == false) {
        headNav.css("display", "block");
        headNav.css({ "top": "-80px" }); /* ヘッダーの高さ分マイナスにする */
        headNav.addClass("is-fixed");
        headNav.animate({ "top": 0 }, 600);
    }
    /* スクロール位置の高さが100pxより小さい、かつis-fixedクラスがある場合 */
    else if (jQuery(this).scrollTop() < 100 && headNav.hasClass("is-fixed") == true) {
        headNav.removeClass("is-fixed");
        headNav.css("display", "none");
    }
});
// トップページからスクロールしたらハンバーガーメニューの色を変える
jQuery(window).on('scroll',function(){
    setTopDrawerBackgroundColor();
});
// ドロワーメニュー
jQuery('.drawer-icon').on('click', function(e) {
    e.preventDefault();
    jQuery('.drawer-icon').toggleClass('is-active');
    jQuery('.lower-drawer').toggleClass('is-active');
    jQuery('.drawer-content').toggleClass('is-active');
    jQuery('.drawer-background').toggleClass('is-active');
    setTopDrawerBackgroundColor();
    return false;
});
// backgroundをクリックしたら閉じる
jQuery('.drawer-background').on('click', function() {
    jQuery('.drawer-icon').removeClass('is-active');
    jQuery('.lower-drawer').removeClass('is-active');
    jQuery('.drawer-content').removeClass('is-active');
    jQuery('.drawer-background').removeClass('is-active');
    setTopDrawerBackgroundColor();
    return false;
});
// --- ハンバーガーメニューの色を設定します。
function setTopDrawerBackgroundColor() {
    const top100 = jQuery(this).scrollTop() <= 100;
    const isActive = jQuery('.drawer-icon').hasClass('is-active');
    const pattern1 = top100 && isActive;
    const pattern2 = top100 && !isActive;
    const pattern3 = !top100 && isActive;
    const pattern4 = !top100 && !isActive;
    // 100pxスクロールして、閉じている時だけ黒色
    if (pattern1) {
        jQuery('.top-drawer').css('background-color', '#fff');
        return;
        }
        else if (pattern2) {
        jQuery('.top-drawer').css('background-color', '#59b1e2');
        return;
        }
        else if (pattern3) {
        jQuery('.top-drawer').css('background-color', '#fff');
        return;
        }
        else if (pattern4) {
        jQuery('.top-drawer').css('background-color', '#ecc100');
        return;
        }

    // 上記以外の場合は白色
    jQuery('.top-drawer').css('background-color', '#59b1e2');
}

// newsのタブイベント
jQuery('.tab li').on('click' ,function(){
    var index = jQuery('.tab li').index(this);

    jQuery('.tab li').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('.area .news-area').removeClass('show').eq(index).addClass('show');
});

// モーダル
jQuery(function(){
	// 変数に要素を入れる
	var open = jQuery('.modal-button'),
		close = jQuery('.modal-close'),
		container = jQuery('.modal-container');
        bg = jQuery('.modalBg');

	//開くボタンをクリックしたらモーダルを表示する
	open.on('click',function(){	
		container.addClass('active');
		return false;
	});

	//閉じるボタンをクリックしたらモーダルを閉じる
	close.on('click',function(){
		container.removeClass('active');
	});

	bg.on('click',function(){
		container.removeClass('active');
	});

});

