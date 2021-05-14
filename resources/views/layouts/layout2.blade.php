<!DOCTYPE html>
<html>
    <head>
        <title>Vật lý trị liệu cần thơ @yield("title")</title>
        <meta charset="UTF-8">
        <meta name="description" content="<%#= yield :description %>">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="shortcut icon" href="/img/favicon.ico">
        <link rel="stylesheet" media="all" href="/css/style.css">
        <link rel="stylesheet" media="all" href="/css/responsive.css">
        <link rel="stylesheet" media="all" href="/css/animation.css">
        <link rel="stylesheet" media="all" href="/css/custome.css">
        <script>
          function DeleteRow(){
            return confirm('Bạn có muốn xóa không ?');
          }
        </script>
    </head>

    <body>
        <div class="site-container fullwidth wpb_row">
            @include("layouts/header")
        </div>
            
        @yield("content")

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
