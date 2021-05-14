@extends('layouts.application')
@section('icon', 'glyphicon glyphicon-earphone')
@section('page', 'Banner')
@section('content')
<div class="site-container fullwidth theme-page relative row clearfix margin-top-30 margin-bottom-30">
    <div class="row">
        <div class="column_container wpb_column col-sm-8 clearfix">
            <div class="wpb_wrapper clearfix">
                <div class="box-header-title">
                    <h2>Điều trị bệnh</h2>
                    <a href="/phuong-phap-dieu-tri" class="click-more">Xem thêm</a>
                </div>
                <ul class="mc-gallery gallery-8-columns horizontal-carousel">
                    @foreach($list as $inx => $row)
                    <li class="gallery-box gallery-box-1 {{ ($inx+1)%3 == 0 ? "margin-right-0" : "" }}">
                      <a href="{{ "/".$row->danhmuc."/".$row->link }}">
                        <img src="/public{{ $row->hinhanh }}" alt ="{{$row->ten}}"  title="{{ $row->ten }}" width="285" height="190" sizes= "(max-width: 285px) 100vw, 285px" style="display: block;" class="mc-preload wp-post-image" />
                        <div class="description">
                            <h4>{{ $row->ten }}</h4>
                        </div>
                        <div class="item-details"><p>{!! substr(strip_tags($row->noidung), 0, 140) !!}</p></div>
                      </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="wpb_wrapper clearfix margin-top-20">
                <div class="box-header-title">
                    <h2>Vật lý trị liệu</h2>
                    <a href="/vat-ly-tri-lieu" class="click-more">Xem thêm</a>
                </div>
                <ul class="mc-gallery gallery-8-columns horizontal-carousel">
                    @foreach($vatly as $inx => $row)
                    <li class="gallery-box gallery-box-1 {{ ($inx+1)%3 == 0 ? "margin-right-0" : ""  }}">
                      <a href="{{ "/#{$row->danhmuc}/#{$row->link}" }}">
                        <img src="/public{{ $row->hinhanh }}" alt ="{{$row->ten}}"  title="{{ $row->ten }}" width="285" height="190" sizes= "(max-width: 285px) 100vw, 285px" style="display: block;" class="mc-preload wp-post-image" />
                        <div class="description">
                            <h4>{{ $row->ten }}</h4>
                        </div>
                        <div class="item-details"><p>{!! substr(strip_tags($row->noidung), 0, 140) !!}</p></div>
                      </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="wpb_wrapper clearfix margin-top-20">
                <div class="box-header-title">
                    <h2>Bán trang thiết bị</h2>
                    <a href="/ban-thiet-bi" class="click-more">Xem thêm</a>
                </div>
                <ul class="mc-gallery gallery-8-columns horizontal-carousel">
                    @foreach($thietbi as $inx => $row)
                    <li class="gallery-box gallery-box-1 {{ ($inx+1)%3 == 0 ? "margin-right-0" : ""  }}">
                      <a href="{{ "/#{$row->danhmuc}/#{$row->link}" }}">
                        <img src="/public{{ $row->hinhanh }}" alt ="{{$row->ten}}"  title="{{ $row->ten }}" width="285" height="190" sizes= "(max-width: 285px) 100vw, 285px" style="display: block;" class="mc-preload wp-post-image" />
                        <div class="description">
                            <h4>{{ $row->ten }}</h4>
                        </div>
                        <div class="item-details"><p>{!! substr(strip_tags($row->noidung), 0, 140) !!}</p></div>
                      </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="wpb_wrapper wpb_column clearfix margin-top-20">
                <div class="box-header-title">
                    <h2>Khuyến mãi và sự kiện</h2>
                    <a href="/khuyen-mai" class="click-more">Xem thêm</a>
                </div>
                <ul class="mc-gallery gallery-8-columns horizontal-carousel carousel autoplay-0 effect-scroll">
                    @foreach($voucher as $inx => $row)
                    <li class="gallery-box gallery-box-1 {{ ($inx+1)%3 == 0 ? "margin-right-0" : ""  }}">
                      <a href="{{ "/khuyen-mai/#{$row->link}" }}">
                        <img src="/public{{ $row->hinhanh }}" alt ="{{$row->ten}}"  title="{{ $row->ten }}" width="285" height="190" sizes= "(max-width: 285px) 100vw, 285px" style="display: block;" class="mc-preload wp-post-image" />
                        <div class="description">
                            <h4>{{ $row->ten }}</h4>
                        </div>
                        <div class="item-details"><p>{!! substr(strip_tags($row->noidung), 0, 140) !!}</p></div>
                      </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="column_container wpb_column col-sm-4 clearfix">
            <div class="widget appointment-widget">
                <h2 class="box-header-title">Tin mới nhất</h2>
                <div class="scrolling-list-wrapper">
                    <div class="caroufredsel_wrapper">
                        <ul class="scrolling-list most-commented">
                            @foreach($new as $inx => $row)
                            <li>
                                <a href="{{ "/".$row->danhmuc."/".$row->link }}" title="{{ $row->ten }}" class="clearfix" >
                                    <span class="left">{{ $row->ten }}</span>
                                    <span class="number">{{ $row->luocxem }} </span>
                                </a>
                                <abbr title="{{ $row->date_create }}" class="timeago">{{ date_format(date_create($row->date_create),"Y/m/d") }}</abbr>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            

            <div class="widget wpb_column appointment-widget margin-top-15">
                <h2 class="box-header-title">Địa chỉ liên hệ</h2>
                <ul class="contact-data">
                    <li class="clearfix features-map"><div class="value">288-290, Đường Tú Xương<br/> KDC Hồng Phát, P.An Bình, Q.Ninh Kiều, TP.Cần Thơ</div></li>
                    <li class="clearfix features-phone"><div class="value">Liên hệ<br><a href="tel:(029)23611779">(029) 236 11 779</a></div></li>
                    <li class="clearfix features-email"><div class="value">Email:<br><a href="mailto:vltlduchoa@gmail.com">vltlduchoa@gmail.com</a></div></li>
                </ul>
            </div>
            
            <div class="widget appointment-widget margin-top-30">
                <div class="button-current">
                  <a class="pre" onclick="videoPre()" href="javascript:void(0);"></a>
                </div>
                <ul id="slideshow_video" class="services-list clearfix">
                 @foreach($video as $inx => $row)
                    <li class="{{ $inx == 0 ? "active" : "" }}" >{!! $row->video !!}</li>
                @endforeach
                </ul>
                <div class="button-current">
                  <a class="next" onclick="videoNext()" href="javascript:void(0);"></a>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div id="slideshow" class="row">
  
        
</div>

<link rel="stylesheet" href="/assets/css/vendor/animate/animate.min.css">

<div  class="site-container fullwidth theme-page relative row clearfix margin-top-30 margin-bottom-30">
  <div class="row wpb_row row-fluid page-margin-top-section">
        <div class="wpb_column column_container col-sm-12">
            <div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                      <h1 class="box-header margin-bottom-20">Ý kiến khách hàng</h1>
                      <ul id="slideshow_thumbs" class="services-list clearfix">
                          <li class="row wpb_row row-fluid">
                              <ul class="autoplay">
                                @foreach($hoatdong as $inx => $row)
                                  <li>
                                      <a href="/public{{ $row->hinhanh }}" title="{{ $row->ten }}">
                                          <img src="/public{{ $row->hinhanh }}" alt ="{{$row->ten}}"  title="{{ $row->ten }}"  data-desoslide-caption-title= "{{$row->mota}}" class="attachment-medium-thumb size-medium-thumb wp-post-image" />
                        
                                      </a>
                                      <div class="service-details"><h4 class="box-header">{{ $row->ten }}</h4>
                                      <p>{{ $row->mota }}</p>
                                      </div>
                                  </li>
                                @endforeach
                              </ul>
                          </li>
                      </ul>
                      <script src="/public/assets/js/jquery.desoslide.min.js"></script>
                      <script src="/public/slick/slick.min.js"></script>
                      <script>
                          $('#slideshow').desoSlide({
                              thumbs: $('#slideshow_thumbs li > a'),
                              auto: {
                                  load:   true,             // Preloading images
                                  start:  true             // Autostarting slideshow
                              },
                              interval: 5000,
                              controls: {
                              show: true,
                              //keys: true
                              }
                          });
                          function videoPre(){
                            var list = $('#slideshow_video').find("li");
                            var inx = $('#slideshow_video li.active').index();
                              list.eq(inx).removeClass("active");
                              $(list.eq(list.length - 1)).parent().prepend(list.eq(list.length - 1));
                              list.eq(inx - 1).addClass("active");
                          }
                          function videoNext(){
                            var list = $('#slideshow_video').find("li");
                            var inx = $('#slideshow_video li.active').index();
                            list.eq(inx).removeClass("active");
                            $(list.eq(0)).parent().append(list.eq(0));
                            list.eq(inx + 1).addClass("active");
                          }
                          
                          var bool = true;
                          $( "#slideshow_video" )
                            .mouseover(function() {
                              bool = false;
                          })
                          .mouseout(function() {
                              bool = true;
                          });
                          setInterval(function (){if (bool){ videoNext(); } }, 4000);
                      </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
