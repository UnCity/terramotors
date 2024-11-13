// 追従(CookiePolicy)の表示 // Display follow (CookiePolicy)
jQuery(function($) {
	
	if ( $('#cookiePolicy').length > 0 ) {
		var cookiePolicy = $('#cookiePolicy');  
		cookiePolicy.hide();
		if(localStorage.getItem('cookieUse') === null) {

			// スクロール時の表示・非表示 // show/hide on scrolling
			$(window).on("scroll", dispAgree);

			// 同意ボタンクリック // click on the agree button
			$('#cookie_agree').on("click", function() {
				$(window).off("scroll", dispAgree);
				localStorage.setItem('cookieUse', 'agree');
				cookiePolicy.hide();
			})
		}

		//スクロールが100に達したらクッキー同意を表示 // Show cookie agreement when scroll reaches 100
		function dispAgree() {
			if ($(this).scrollTop() > 100) {
				cookiePolicy.fadeIn();
			} else {
				cookiePolicy.fadeOut();
			}
		}
	}

	
});

// ページ内アンカーリンクのスクロールエフェクト // Scrolling effect for anchor links within the page
// ヘッダーが固定の場合はheaderHightにヘッダーの高さを設定(PC/SP要設定) // Set header height to headerHight if header is fixed (PC/SP setting required)
jQuery(function($) {
    var headerHeight = 0; // ヘッダー追従でない場合 // if not header-following
	// var headerHeight = $('header').innerHeight(); // ヘッダー追従の場合 // if header following
    $('a[href^="#"]').click(function(){
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        if ( target.length > 0 ) {
            var position = target.offset().top - headerHeight;
            $("html, body").animate({scrollTop:position}, 550, "swing");
            return false;
        }
    });
})

// ブログサムネイル 中心でトリミング // Blog thumbnail Crop at center
jQuery(function($) {
    if ( $('.obj_image').length > 0 ) {
        objectFitImages('.obj_image');
    }
});


// ページトップボタンの表示 // Display the page top button
jQuery(function($) {
	
	if ( $('#pageup').length > 0 ) {
		var topBtn = $('#pageup');    
		topBtn.css("display", "none");
		//スクロールが100に達したらボタン表示 // display button when scroll reaches 100
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				topBtn.fadeIn();
			} else {
				topBtn.fadeOut();
			}
		});
		//スクロールしてトップ // scroll to the top
		topBtn.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	}
});


// ヘッダーの固定エフェクト // Fixed header effect
// jQuery(function($) {
// 	var $header = $('header');
// 	$(window).scroll(function() {
// 		if ($(window).scrollTop() > 50) {
// 			$header.addClass('fixed');
// 		} else {
// 			$header.removeClass('fixed');
// 		}
// 	});
// });



// レスポンシブ画像切り替え imgにclass「js-image-switch」// responsive image switch class "js-image-switch" in img
jQuery(function($) {
	
	if ( $('.js-image-switch').length > 0 ) {
		
		var $elem = $('.js-image-switch');
		var sp = '_sp.';
		var pc = '_pc.';
		// 画像を切り替えるウィンドウサイズ // Window size to switch images
		var replaceWidth = 768;

		function imageSwitch() {
			var windowWidth = parseInt($(window).width());
			$elem.each(function() {
				var $this = $(this);
				if(windowWidth >= replaceWidth) {
				$this.attr('src', $this.attr('src').replace(sp, pc));
				} else {
					$this.attr('src', $this.attr('src').replace(pc, sp));
				}
			});
		}
		imageSwitch();

		var resizeTimer;
		$(window).on('resize', function() {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function() {
				imageSwitch();
			}, 200);
		});
	}
});


// アコーディオンの起動 // Activate the accordion
jQuery(function($) {
	
	
	if ( $('dl.accordion dt').length > 0 ) {
		
		$("dl.accordion dt").click(function(){
			$(this).next("dd").slideToggle();
			$(this).toggleClass("open");
		});
	}
});

// ドロワーメニュー // Drawer menu
jQuery(function($) {
    if ($('#toggle').length > 0) {
		$('#toggle').click(function () {
			$(this).toggleClass('toggle_active');
			$('#drawer_layer').fadeToggle();
			$('body').toggleClass('drawer_open');
			
			if ($(this).hasClass('toggle_active')) {
				$('nav').addClass('is_open');
				$('nav').removeClass('is_close');
			} else {
				$('nav').removeClass('is_open');
				$('nav').addClass('is_close');
			}
		});
		
		$('#drawer_layer').click(function () {
			$(this).fadeOut();
			$('#toggle').removeClass('toggle_active');
			$('body').removeClass('drawer_open');
			$('nav').removeClass('is_open');
			$('nav').addClass('is_close');
		});
		
		// エリア内リンク用 // For links within an area
		$('nav a').on('click', function(){
			// if (window.innerWidth <= 768) {
			if ($('#toggle:visible').length > 0) {
				$('#toggle').click();
			}
		});
	}
    
});


// facebookプラグインリサイズ処理 // facebook plugin resizing process
jQuery(function($) {
	
	if ( $('#pageplugin').length > 0 ) {

		var windowWidth = $(window).width();
		var htmlStr = $('#pageplugin').html();
		var timer = null;
		$(window).on('resize',function() {
			var resizedWidth = $(window).width();
			if(windowWidth != resizedWidth && resizedWidth < 500) {
				clearTimeout(timer);
				timer = setTimeout(function() {
					$('#pageplugin').html(htmlStr);
					window.FB.XFBML.parse();
			   		//window.FB.XFBML.parse()で再レンダリングします。// re-render with window.FB.XFBML.parse(); window.FB.XFBML.parse()
					var windowWidth = $(window).width();
				}, 500);
			}
		});
	}
});