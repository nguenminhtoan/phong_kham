<style>
    
    .conver-img{
        object-fit: fill; 
        object-position: 50% 50%;
        width: 100%;
        max-height: 650px;
    }
    
</style>
<div class="" style="position: relative;">
    @if (isset($banner))
    <div class="lazy slider">
        @foreach ($banner as $row )
        <div><a href="/{{ $row->link }}"><img src="/public{{$row->hinhanh}}" alt="{{$row->mota}}" class="conver-img" /></a></div>
        @endforeach
    </div>
    @endif

    <div class="row wpb_row row-fluid">
        <div class="clearfix home-box-container-list for-home-slider">
            <ul style="padding: 0px;">
                <li class="home-box-container clearfix animated-element animation-fadeIn duration-500 fadeIn" style="animation-duration: 500ms; animation-delay: 0ms; transition-delay: 0ms;">
                    <div class="home-box">
                        <h2>Về chúng tôi</h2>				
                        <div class="news clearfix">
                            <div class="text">	
                                {!! substr($option[1], 0, 140)!!}
                            </div>
                            <a title="READ MORE" href="" target="_blank" class="mc-button more template-arrow-horizontal-1-after light">Đọc thêm</a>
                        </div>
                    </div>
                </li>
                <li class="home-box-container clearfix animated-element animation-slideRight duration-800 delay-250 slideRight" style="animation-duration: 800ms; animation-delay: 250ms; transition-delay: 250ms;">
                    <div class="home-box">
                        <h2>Chuyên điều trị bệnh</h2>				
                        <div class="news clearfix">
                            <div class="text">{!! substr($option[2], 0, 170) !!}</div>
                            <a title="READ MORE" href="" class="mc-button more template-arrow-horizontal-1-after light">Đọc thêm</a>				
                        </div>
                    </div>
                </li>
                <li class="home-box-container clearfix animated-element animation-slideRight200 duration-800 delay-500 slideRight200" style="animation-duration: 800ms; animation-delay: 500ms; transition-delay: 500ms;">
                    <div class="home-box">
                        <h2>Thời gian làm việc</h2>				
                        <div class="news clearfix">
                            <div class="text">
                                <div class="scrolling-list-wrapper">
                                    <div class="scrolling-list-fix-block"></div>
                                    <div class="caroufredsel_wrapper" style="display: block; text-align: left; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 216px; height: 130px; margin: 0px; overflow: hidden;">
                                        <ul class="scrolling-list scrolling-list-0 thin opening-hours clearfix" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 509px; width: 216px;">
                                            <li class="clearfix">
                                                <span>Thứ 2 - Thứ 7</span><div class="value">{{ $option[3]}}</div>
                                            </li>
                                            <li class="clearfix">
                                                <span>Chủ nhật</span><div class="value">{{ $option[3]}}</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>					
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>