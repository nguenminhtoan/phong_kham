<div class="footer-container">
    <div class="footer">
        <ul class="footer-banner-box-container clearfix">
            <li class="footer-banner-box features-map animated-element animation-fadeIn duration-500 fadeIn" style="animation-duration: 500ms; animation-delay: 0ms; transition-delay: 0ms;">
                <h2>Tìm kiếm địa chỉ</h2>						
                <p class="content-margin">	
                    <a href="https://goo.gl/maps/pL1oSTDixQ62" target="_blank">Tìm trên Google Map</a>			
                </p>
            </li>
            <li class="footer-banner-box features-phone animated-element animation-slideRight duration-800 delay-250 slideRight" style="animation-duration: 800ms; animation-delay: 250ms; transition-delay: 250ms;">
                <h2>Gọi điện thoại</h2>
                <p class="content-margin">	
                    <a href="tel:(029)23611779#">(029) 236 11 779</a>	
                </p>
            </li>
            <li class="footer-banner-box features-email animated-element animation-slideRight200 duration-800 delay-500 slideRight200" style="animation-duration: 800ms; animation-delay: 500ms; transition-delay: 500ms;">
                <h2>Gửi tin nhắn email</h2>						<p class="content-margin">	
                    <a href="mailto:vltlduchoa@gmail.com">Gửi Email</a>			</p>
            </li>
        </ul>
        <div class="footer-box-container row row-fluid clearfix">
            <div class="widget col-sm-6">
                <h1 class="box-header">Thông tin liên hệ</h1>		
                <ul class="contact-data">
                    <li class="clearfix template-location">
                        <div class="value">288-290, Đường Tú Xương, KDC Hồng Phát, P.An Bình, Q.Ninh Kiều, TP.CT</div>
                    </li>
                    <li class="clearfix template-phone">
                        <div class="value">
                            <a href="tel:(029)23611779">(029) 236 11 779</a>
                        </div>
                    </li>
                    <li class="clearfix template-mail">
                        <div class="value">
                            <a href="mailto:vltlduchoa@gmail.com">vltlduchoa@gmail.com</a>
                        </div>
                    </li>
                </ul>
                <div id="map" class="google-map-container" style="background-color: #FFF">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5675.295082919146!2d105.74089453092682!3d10.021872249281314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87fa56fde85ee9fe!2zUGjDsm5nIEtow6FtIFbhuq10IEzDvSBUcuG7iyBMaeG7h3UgxJDhu6ljIEhvw6A!5e0!3m2!1svi!2sjp!4v1573556946037!5m2!1svi!2sjp" width="600" height="400" frameborder="0" style="border:0; margin-top: 115px" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="widget wpb_column widget_nav_menu col-sm-3 column_container">
                <h1 class="box-header">Danh mục</h1>
                <div class="menu-additional-links-container">
                    <ul id="menu-additional-links" class="menu">
                        @foreach ($menu as $row )
                            @if ($row->fk_danhmuc == "")
                            <li class="menu-item">
                                  <a href="/{{ $row->link}}">{{ $row->ten}}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="widget wpb_column col-sm-3  column_container">		
                <div class="clearfix scrolling-controls">
                    <div class="header-left">
                        <h1 class="box-header">Bài viết nổi bật</h1>			
                    </div>
                </div>
                <div class="scrolling-list-wrapper">
                    <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 462px; height: 229px; margin: 0px; overflow: hidden;">
                        <ul class="scrolling-list footer-recent-posts" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 991px; width: 462px;">
                            @foreach($tinhot as $inx => $row)
                            <li>
                                <a href="{{"/".$row->danhmuc."/".$row->link}}" title="{{$row->ten}}" >{{$row->ten}}</a>
                                <abbr title="{{ $row->date_create }}" class="timeago">{{ $row->date_create }}</abbr>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>				
        </div>
    </div>
</div>
<div class="style-selector">
  @if(isset($option[7]))
  <a href="{{ $option[7]}}" class="style-selector-icon icon-face"></a>
  @endif
  @if(isset($option[8]))
  <a href="{{ $option[8]}}" class="style-selector-icon icon-tube"> </a>
  @endif
  @if(isset($option[9]))
  <a href="{{ $option[9]}}" class="style-selector-icon icon-zalo"> </a>
  @endif
  @if(isset($option[10]))
  <a href="{{ $option[10]}}" class="style-selector-icon icon-maps"> </a>
  @endif
  @if(isset($option[11]))
  <a href="tel:{{ @option[11]}}" class="style-selector-icon icon-hotline"> </a>
  @endif
</div>
<div class="copyright-area-container">
    <div class="copyright-area clearfix">
        <div class="copyright-text">
            © 2017 <a href="" target="_blank">MediCenter Theme</a>. All rights reserved.					
        </div>
        <div id="text-4" class="widget widget_text">			
            <div class="textwidget">
                <div class="icons-list">
                    <a href="https://twitter.com/QuanticaLabs" target="_blank" class="icon-single mc-icon social-twitter"></a>
                    <a href="https://www.facebook.com/QuanticaLabs/" target="_blank" class="icon-single mc-icon social-facebook"></a>
                    <a href="https://www.pinterest.com/quanticalabs/" target="_blank" class="icon-single mc-icon social-pinterest"></a>
                </div>
            </div>
        </div>
        <div class="menu-footer-menu-container">
            <ul id="menu-footer-menu" class="footer-menu">
                <li id="menu-item-3602" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3602"><a href="#">Privacy</a></li>
                <li id="menu-item-3603" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3603"><a href="#">Terms</a></li>
                <li id="menu-item-3604" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3604"><a href="#">Sitemap</a></li>
            </ul>
        </div>
    </div>
</div>
<a href="javascript:void(0);" class="scroll-top animated-element template-arrow-vertical-3 fadeIn" title="Scroll to top" style="animation-duration: 600ms; animation-delay: 0ms; transition-delay: 0ms;"></a>

<!--script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkQYKZ09Vq2UCCR17GwEkfQrcs_Uz2ccg&callback=initMap" type="text/javascript"></script-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/javascripts/common.js" charset="utf-8"></script>
        
<script type="text/javascript">
  $(document).on('ready', function () {
    $(".lazy").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
    });
  });
  
  
  $(".scroll-top").click(function () {
      $('body,html').animate({
          scrollTop: 0
      });
  });
</script>