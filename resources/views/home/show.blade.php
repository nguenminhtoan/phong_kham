@extends('layouts.layout2')
@section('title', $title)
@section('description', $title)
@section('content')
<div class="site-container fullwidth">
    <div class="row wpb_row row-fluid page-header vertical-align-table full-width">
        <div class="row wpb_row inner row-fluid">
            <div class="page-header-left">
                <h1 class="page-title">{{$title}}</h1>
                <ul class="bread-crumb">
                    <li>
                        <a href="/" title="Home">Trang chủ</a>
                    </li>
                    <li class="separator template-arrow-horizontal-1">
                        
                    </li>
                    <li>
                        {{$title}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>	
<div class="site-container fullwidth theme-page relative row clearfix margin-top-30 margin-bottom-30">
    <div class="row">
        <div class="wpb_column column_container col-sm-8 clearfix">
            <div class="columns clearfix layout-row">
                <div class="wpb_wrapper clearfix">
                  @foreach ($list as $item)
                    <ul class="blog clearfix page-margin-top">
                      @foreach ($item as $row)
                        <li class="col-sm-6 wpb_column column_container  post post-489 type-post status-publish format-standard has-post-thumbnail hentry category-general category-health category-rehabilitation tag-drugs">
                            <ul class="comment-box clearfix">
                                <li class="date">
                                    <div class="value">{{ date_format(date_create($row->date_create),"Y/m/d")  }}</div>
                                    <div class="arrow-date"></div>
                                </li>
                                <li class="comments-number">
                                    <a href="{{ "/".$row->danhmuc."/".$row->link }}" title="Số lược xem">{{ $row->luocxem }}</a>
                                </li>
                            </ul>
                            <div class="post-content">
                                <a class="post-image" href="{{ "/".$row->danhmuc."/".$row->link }}">
                                    <img src="/public{{ $row->hinhanh }}" alt ="{{$row->ten}}"  title="{{ $row->ten }}" width="600" height="400" sizes= "(max-width: 600px) 100vw, 600px" style="display: block;" class="mc-preload wp-post-image" />
                                    <h2>{{ $row->ten}}</h2>
                                    <p> {!! substr(strip_tags($row->noidung), 0, 300) !!}</p>
                                </a>
                                @if ($title == "Bán thiết bị")
                                <div class="price">Giá bán: liên hệ</div><br/>
                                <a href="tel: 0937304037" class="btn-add">Đặt hàng</a>
                                <a title="Read more" href="{{ "/".$row->danhmuc."/".$row->link}}" class="more template-arrow-horizontal-1-after button-detail">Chi tiết</a>
                                @else
                                <a title="Read more" href="{{ "/".$row->danhmuc."/".$row->link}}" class="more template-arrow-horizontal-1-after">Chi tiết</a>
                                @endif
                                <div class="post-footer clearfix">
                                    <ul class="post-footer-details">
                                        <li class="post-footer-author">
                                            {{$row->hoten }}
                                        </li>
                                        
                                        <li class="post-footer-category">
                                             
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                      @endforeach
                    </ul>
                    @endforeach
                    <ul class="pagination page-margin-top">
                        
                    </ul>
                </div>
            </div>
        </div>

        <div class="wpb_column column_container col-sm-4 clearfix">
            
            <div class="widget widget_categories margin-top-15">
                <h2 class="box-header-title">Danh mục</h2>
                <div class="caroufredsel_wrapper">
                    <ul>
                        @foreach ($menu as $row)
                        <li class="cat-item"><a href="{{$row->link}}" title="{{$row->ten}}">{{$row->ten}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="widget appointment-widget margin-top-15">
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
                                <abbr title="{{ date_format(date_create($row->date_create),"Y/m/d")  }}" class="timeago">{{ date_format(date_create($row->date_create),"Y/m/d")  }}</abbr>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="widget appointment-widget margin-top-15">
                <h2 class="box-header-title">Địa chỉ liên hệ</h2>
                <ul class="contact-data">
                    <li class="clearfix features-map"><div class="value">288-290, Đường Tú Xương<br/> KDC Hồng Phát, P.An Bình, Q.Ninh Kiều, TP.Cần Thơ</div></li>
                    <li class="clearfix features-phone"><div class="value">Liên hệ<br><a href="tel:(029)23611779">(029) 236 11 779</a></div></li>
                    <li class="clearfix features-email"><div class="value">Email:<br><a href="mailto:vltlduchoa@gmail.com">vltlduchoa@gmail.com</a></div></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@stop
