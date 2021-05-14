<div class="header-container">
    <div class="header clearfix top-sidebar-visible layout-2">
        <div class="header-left">
            <a href="/" title="logo phòng khám vật lý trị liệu đức hòa cần thơ" class="logo-parent">
                <img src="/public/img/logo.png" alt="logo phòng khám vật lý trị liệu đức hòa cần thơ" title="logo phòng khám vật lý trị liệu đức hòa cần thơ" class="logo">
                <div class="logo-right">
                  <div class="logo-title">CÔNG TY TNHH DỊCH VỤ CHĂM SÓC SỨC KHỎE ĐỨC HÒA</div>
				  <div class="logo-address">Phòng khám chuyên khoa vật lý trị liệu đức hòa - Cung cấp thiết bị chuyên nghành vật lý trị liệu</div>
                  <div class="logo-address">Địa chỉ: 288-290 Đường Tú Xương, KDC Hồng Phát, Phường An Bình, Quận Ninh Kiều, TP.Cần Thơ</div>
				  <div class="logo-number">Điện thoại: (0941) 53 65 65 - (029) 236 11 779</div>
                </div>
            </a>
        </div>
        <a href="javascript:void(0);" class="mobile-menu-switch vertical-align-cell" onclick="showMenu()">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </a>
    </div>
</div>
<div class="header-separator padding-top-0"></div>
<div class="header-container header-container-layout-2 sticky" id="nav-menu">
    <div class="header clearfix padding-top-0 padding-bottom-0">
        <div class="menu-main-container">
            <ul class="sf-menu header-right">
                <li class="menu-separator"></li>
                <li class="menu-item">
                    <a href="/">Trang chủ</a>
                </li>
                @if (isset($menu))
                  @foreach ($menu as $item)
                    @if ($item->fk_danhmuc == "" )
                      <li class="menu-separator"></li>
                      <li class="menu-item {{in_array($item->id_danhmuc, array_column($menu, "fk_danhmuc")) ? "" : ""}}" >
                          <a href="/{{$item->link}}">{{$item->ten}}</a>
                           @if (array_search($item->id_danhmuc, array_column($menu, "fk_danhmuc")) )
                              <ul class="sub-menu">
                              @foreach($menu as $row)
                                    @if($row->fk_danhmuc == $item->id_danhmuc )
                                  <li class="menu-item">
                                      <a href="/{{ $row->link}}">{{ $row->ten}}</a>	
                                  </li>
                                    @endif
                              @endforeach
                            </ul>
                           @endif
                      </li>
                    @endif
                  @endforeach
                @endif
                <li class="menu-separator"></li>
                <li class="menu-item">
                    <a href="/khuyen-mai">Khuyến mãi và sự kiện</a>
                </li>
                <li class="menu-separator"></li>
                <li class="menu-item">
                    <a href="/dathen/input">Đặt hẹn</a>
                </li>
                <li class="menu-separator"></li>
            </ul>
        </div>
        <div class="mobile-menu-container clearfix">
            <nav id="mobile" class="mobile-menu collapsible-mobile-submenus" style="display: none;" data-show='0'>
              @if (isset($menu))
                <ul id="menu-main-menu-1" class="menu">
                  <li class=""><a href="/">Trang chủ</a></li>
                  @foreach ($menu as $item )
                    @if ($item->fk_danhmuc == "")
                      <li class="menu-separator"></li>
                      <li class="menu-item wide">
                      <a href="/{{$item->link}}">{{$item->ten}}</a>
                        @if (array_search($item->id_danhmuc, array_column($menu, "fk_danhmuc")))
                           <ul class="sub-menu">
                           @foreach($menu as $row)
                                 @if ($row->fk_danhmuc == $item->id_danhmuc )
                               <li class="menu-item">
                                   <a href="/{{ $row->link}}">{{ $row->ten}}</a>	
                               </li>
                                 @endif
                           @endforeach
                         </ul>
                        @endif
                      </li>
                    @endif
                  @endforeach
                  <li class="menu-separator"></li>
                  <li class="menu-item">
                      <a href="/khuyen-mai">Khuyến mãi và sự kiện</a>
                  </li>
                  <li class="menu-separator"></li>
                  <li class="menu-item">
                      <a href="/dathen/input">Đặt hẹn</a>
                  </li>
                </ul>
              @endif
            </nav>						
        </div>
    </div>
</div>