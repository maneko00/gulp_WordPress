jQuery(function () {
  // ドロワー
  jQuery(".js_drawer_icon").on("click", function (e) {
    //ページ遷移しないコマンド
    e.preventDefault();
    //動作確認コマンド
    // alert('clickされました');
    jQuery(".js_drawer_icon").toggleClass("is_active");
    jQuery(".js_drawer_cont").toggleClass("is_active");
    jQuery(".js_drawer_bg").toggleClass("is_active");
    return false;
  });

  // // qa
  // jQuery('.js_accordion .js_accordion_btn').on('click',function() {
  //   jQuery(this).toggleClass('is_active');
  //   jQuery(this).parent().next().slideToggle();
  //   jQuery(this).parent().next('.js_accordion_body').toggleClass( 'is_active' );
  // });

  // //smoothscroll
  // jQuery('a[href^="#"]').on('click',function () {
  //   var header = jQuery('#js_header').innerHeight();
  //   // hrefで指定されたidを取得
  //   var id = jQuery(this).attr("href");
  //   // 移動速度を指定（ミリ秒）
  //   var speed = 300;
  //   //デバック用
  //   //console.log(id);
  //   // idの値が#のみだったらトップへ戻るようにする
  //   var position = 0;
  //   if ( id != '#') {
  //     // ページのトップを基準にターゲットの位置を取得
  //     position = jQuery(id).offset().top - header;
  //   }
  //   // ターゲットの位置までspeedの速度で移動
  //   jQuery("html, body").animate(
  //     {
  //       scrollTop: position
  //     },
  //     speed
  //   );
  //   return false;
  // });

  // // スクロール検知
  // jQuery(window).on("scroll", function() {
  //   console.log(jQuery(this).scrollTop())
  //   // トップから100px以上スクロールしたら
  //   if (100 < jQuery(this).scrollTop()) {
  //     // is-showクラスをつける
  //     jQuery('.js_totop').addClass( 'is_show' );
  //   } else {
  //     // 100pxを下回ったらis-showクラスを削除
  //     jQuery('.js_totop').removeClass( 'is_show' );
  //   }
  // });

   // form validation
   (function() {
     // 始めにjQueryで送信ボタンを無効化する
    jQuery("#js_submit").prop("disabled", true);
    
    var $submit = jQuery( '#js_submit' );
    var $form = jQuery( '#js_contactForm' );
    var requireFlg = false;
    var $require = jQuery( '#js_contactForm .js_require' );
    var fillCount = 0;

    function setSubmitProp() {
      if( requireFlg ) {
        $submit.prop( 'disabled', false );
        $submit.addClass( '-active' );
      } else {
        $submit.prop( 'disabled', true );
        $submit.removeClass( '-active' );
      }
    }

    // 必須項目
    $require.on( 'blur', function() {
      $require.each( function() {
        var value = jQuery( this ).val();
        if( ( value !== '' && value.match( /[^\s\t]/ ) ) ) {
          fillCount++;
        }
      });

      requireFlg = ( fillCount === $require.length ? true : false );
      setSubmitProp();
      fillCount = 0;
    });

    // 送信時
    $form.on( 'submit', function() {
      if( !( requireFlg ) ) {
        alert( '入力に誤りがあります。' );
        return false;
      }
    });
  })();

  // googleform
  let $form = jQuery('#js_contactForm');
  let $formTxt = jQuery('#js_inquiry_txt');
  $form.submit(function(e) {
    jQuery.ajax({
     url: $form.attr('action'),
     data: $form.serialize(),
     type: "POST",
     dataType: "xml",
     statusCode: {
        0: function() {
          //送信に成功したときの処理
          $form.slideUp()
          $formTxt.slideUp()
          jQuery( '#js_success' ).slideDown()
        },
        200: function() {
          //送信に失敗したときの処理
          $form.slideUp()
          $formTxt.slideUp()
          jQuery( '#js_error' ).slideDown()
        }
      }
    });
    return false;
  });
});
