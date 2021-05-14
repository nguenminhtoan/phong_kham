@extends('layouts.layout2')
@section('title', $title)
@section('description', $title)
@section('content')
<div class="site-container fullwidth">
    <div class="row wpb_row row-fluid page-header vertical-align-table full-width">
        <div class="row wpb_row inner row-fluid">
            <div class="page-header-left">
                <h1 class="page-title">{{ $detail->ten }}</h1>
                <ul class="bread-crumb">
                    <li>
                        <a href="/" title="Home">Trang chủ</a>
                    </li>
                    <li class="separator template-arrow-horizontal-1">
                        &nbsp;
                    </li>
                    <li>
                        <a href="{{ $detail -> danhmuc }}" title="{{$title}}" >{{$title}}</a>
                    </li>
                    <li class="separator template-arrow-horizontal-1">
                        &nbsp;
                    </li>
                    <li>
                        {{ $detail->ten }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>	

<div class="site-container fullwidth theme-page relative row clearfix margin-bottom-30">
    <div class="row">
        <div class="wpb_column column_container col-sm-8 clearfix">
            <div class="wpb_wrapper clearfix">
                <div class="wpb_wrapper">
                    <ul class="blog clearfix page-margin-top">
                        <li class="single post post-1393 type-post status-publish format-standard has-post-thumbnail hentry category-general category-ophthalmology-clinic tag-dentistry">
                            <ul class="comment-box clearfix">
                                <li class="date clearfix animated-element animation-slideRight slideRight" style="animation-duration: 600ms; animation-delay: 0ms; transition-delay: 0ms;">
                                    <div class="value">{{ date_format(date_create($detail->date_create),"Y/m/d") }}</div>
                                    <div class="arrow-date"></div>
                                </li>
                            </ul>
                            <div class="post-content">
                                {!! $detail->noidung !!}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="wpb_column column_container col-sm-4 clearfix page-margin-top">
            
            
            <div class="widget wpb_column widget_categories margin-top-15">
                <h2 class="box-header-title">Danh mục</h2>
                <div class="caroufredsel_wrapper">
                    <ul>
                        @foreach ($menu as $row)
                        <li class="cat-item"><a href="{{$row->link}}" title="{{$row->ten}}">{{$row->ten}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <div class="widget wpb_column appointment-widget margin-top-15">
                <h2 class="box-header-title">Vừa mới xem</h2>
                <div class="scrolling-list-wrapper">
                    <div class="caroufredsel_wrapper">
                        <ul class="scrolling-list most-commented">
                            @foreach($his as $inx => $row)
                            <li>
                                <a href="{{ "/".$row->danhmuc."/".$row->link }}" title="{{ $row->ten }}" class="clearfix" >
                                    <span class="left">{{ $row->ten }}</span>
                                    <span class="number">{{ $row->luocxem }} </span>
                                </a>
                                <abbr title="{{ $row->date_create }}" class="timeago">{{ date_format(date_create($row->date_create),"Y/m/d")  }}</abbr>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="widget wpb_column appointment-widget margin-top-15">
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
                                <abbr title="{{ $row->date_create }}" class="timeago">{{ date_format(date_create($row->date_create),"Y/m/d")  }}</abbr>
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
