<!DOCTYPE html>
<html>
    <head>
        <title>Phòng Khám Vật Lý Trị Liệu Đức Hòa Cần Thơ <%= yield :title %></title>
        <meta charset="UTF-8">
        <meta name="description" content="Phòng khám chuyên khoa vật lý trị liệu phục hồi chức năng Đức Hòa - KDC Hồng Phát P.An Bình, Q.Ninh Kiều, TP.Cần Thơ">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="google-site-verification" content="IjVEhFR3DYUqhvLtbszSlT_EfY2tTZuglPeNChNQs3M" />
        <link rel="shortcut icon" href="/public/img/favicon.ico">
        <link rel="stylesheet" media="all" href="/css/style.css">
        <link rel="stylesheet" media="all" href="/css/responsive.css">
        <link rel="stylesheet" media="all" href="/css/animation.css">
        <link rel="stylesheet" media="all" href="/css/custome.css">
        <link rel="stylesheet" type="text/css" href="/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css">
        <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflxGrywa/www-widgetapi.js" async=""></script>
        <script src="/assets/js/vendor/jquery/jquery.js"></script>
    </head>

    <body>
		<img alt="logo" src="/public/img/logo.jpg" title="logo phòng khám vật lý trị liệu đức hòa cần thơ" style="display: none" /> 
        <div class="site-container fullwidth wpb_row">
            @include("layouts/header")
            @include("layouts/slider")
            @include("layouts/menu")
        </div>
            
        <div class="site-container fullwidth theme-page relative row clearfix margin-top-30 margin-bottom-30">
            
            @yield("content")
        </div>

        @include("layouts/footer")
        <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="437752683060722"
  logged_in_greeting="Cám ơn Anh Chị đã đến với phòng khám. Chúng tôi có thể hỗ trợ gì cho Anh Chị ?"
  logged_out_greeting="Cám ơn Anh Chị đã đến với phòng khám. Chúng tôi có thể hỗ trợ gì cho Anh Chị ?">
      </div>
    </body>
</html>