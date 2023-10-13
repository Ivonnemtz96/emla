 <!-- JS
         ============================================ -->
 <!-- jQuery JS -->
 <script data-cfasync="false"
     src="https://attorco-demo.pbminfotech.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="js/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="js/popper.min.js"></script>
 <!-- Bootstrap JS -->
 <script src="js/bootstrap.min.js"></script>
 <!-- jquery Waypoints JS -->
 <script src="js/jquery.waypoints.min.js"></script>
 <!-- jquery Appear JS -->
 <script src="js/jquery.appear.js"></script>
 <!-- Numinate JS -->
 <script src="js/numinate.min.js"></script>
 <!-- Swiper JS -->
 <script src="js/swiper.min.js"></script>
 <!-- Magnific JS -->
 <script src="js/jquery.magnific-popup.min.js"></script>
 <!-- Circle Progress JS -->
 <script src="js/circle-progress.js"></script>
 <!-- AOS -->
 <script src="js/aos.js"></script>
 <!-- Scripts JS -->
 <script src="js/scripts.js"></script>
 <!-- Revolution JS -->
 <script src="revolution/rslider.js"></script>
 <script src="revolution/rbtools.min.js"></script>
 <script src="revolution/rs6.min.js"></script>
 <script>
(function() {
    var js =
        "window['__CF$cv$params']={r:'81487889f974aa58',t:'MTY5NzA0MTY1MC4zMTYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='https://attorco-demo.pbminfotech.com/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
    var _0xh = document.createElement("iframe");
    _0xh.height = 1;
    _0xh.width = 1;
    _0xh.style.position = "absolute";
    _0xh.style.top = 0;
    _0xh.style.left = 0;
    _0xh.style.border = "none";
    _0xh.style.visibility = "hidden";
    document.body.appendChild(_0xh);

    function handler() {
        var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
        if (_0xi) {
            var _0xj = _0xi.createElement("script");
            _0xj.innerHTML = js;
            _0xi.getElementsByTagName("head")[0].appendChild(_0xj);
        }
    }
    if (document.readyState !== "loading") {
        handler();
    } else if (window.addEventListener) {
        document.addEventListener("DOMContentLoaded", handler);
    } else {
        var prev = document.onreadystatechange || function() {};
        document.onreadystatechange = function(e) {
            prev(e);
            if (document.readyState !== "loading") {
                document.onreadystatechange = prev;
                handler();
            }
        };
    }
})();
 </script>
 <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
     integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
     data-cf-beacon='{"rayId":"81487889f974aa58","version":"2023.8.0","r":1,"b":1,"token":"125856bf84ab44059737e93b01aa0fef","si":100}'
     crossorigin="anonymous"></script>
     <script>
        (function($) {
  var wa_time_out, wa_time_in;
  $(document).ready(function() {
    $(".wa__btn_popup").on("click", function() {
      if ($(".wa__popup_chat_box").hasClass("wa__active")) {
        $(".wa__popup_chat_box").removeClass("wa__active");
        $(".wa__btn_popup").removeClass("wa__active");
        clearTimeout(wa_time_in);
        if ($(".wa__popup_chat_box").hasClass("wa__lauch")) {
          wa_time_out = setTimeout(function() {
            $(".wa__popup_chat_box").removeClass("wa__pending");
            $(".wa__popup_chat_box").removeClass("wa__lauch");
          }, 400);
        }
      } else {
        $(".wa__popup_chat_box").addClass("wa__pending");
        $(".wa__popup_chat_box").addClass("wa__active");
        $(".wa__btn_popup").addClass("wa__active");
        clearTimeout(wa_time_out);
        if (!$(".wa__popup_chat_box").hasClass("wa__lauch")) {
          wa_time_in = setTimeout(function() {
            $(".wa__popup_chat_box").addClass("wa__lauch");
          }, 100);
        }
      }
    });

    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
      var expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(";");
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    $("#nta-wa-gdpr").change(function() {
      if (this.checked) {
        setCookie("nta-wa-gdpr", "accept", 30);
        if (getCookie("nta-wa-gdpr") != "") {
          $('.nta-wa-gdpr').hide(500);
          $('.wa__popup_content_item').each(function(){
            $(this).removeClass('pointer-disable');
            $('.wa__popup_content_list').off('click');
          })
        }
      }
    });

    if (getCookie("nta-wa-gdpr") != "") {
      $('.wa__popup_content_list').off('click');
    } else{
      $('.wa__popup_content_list').click(function(){
        $('.nta-wa-gdpr').delay(500).css({"background" : "red", "color" : "#fff"});
      });
    }
  });
})(jQuery);
     </script>