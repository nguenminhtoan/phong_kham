<div class="menu-block" id="left">
    <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
            <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="/img/admin.jpg">
                <span class="label label-danger user-label"></span>
            </a>

            <div class="media-body">
                <h5 class="media-heading"></h5>
                <ul class="list-unstyled user-info">
                    <li><a href="javascript:void(0);"></a>{{ Session::get("admin")->ten }}</li>
                    <li>Truy cập lần cuối : <br/>
                        <small><i class="glyphicon glyphicon-calendar"></i>&nbsp;</small> 
                        {{ Session::get("date_time") }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul id="menu" class="bg-dark dker">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        @if(Session::get("admin")->id_nguoidung == 1)
        <li>
            <a href="/admin/customer">
                <i class="glyphicon glyphicon-user"></i>
                <span class="link-title">Người Dùng</span>
            </a>
        </li>
        @endif
        <li>
            <a href="/admin/categories">
                <i class="fa fa-navicon"></i>
                <span class="link-title">Danh Mục</span>
            </a>
        </li>
        <li>
            <a href="/admin/benh">
                <i class="fa fa-product-hunt"></i>
                <span class="link-title">Triệu chứng</span>
            </a>
        </li>
        <li>
            <a href="/admin/news">
                <i class="fa fa-newspaper-o"></i>
                <span class="link-title">Tin Tức</span>
            </a>
        </li>
        <li>
            <a href="/admin/banner">
                <i class="glyphicon glyphicon-earphone"></i>
                <span class="link-title">Banner</span>
            </a>
        </li>
        
        <li>
            <a href="/admin/video">
                <i class="glyphicon glyphicon-facetime-video"></i>
                <span class="link-title">Video</span>
            </a>
        </li>
        <li>
            <a href="/admin/voucher">
                <i class="fa fa-gift"></i>
                <span class="link-title">Khuyến Mãi</span>
            </a>
        </li>
        <li>
            <a href="/admin/hoatdong">
                <i class="fa fa-users"></i>
                <span class="link-title">Hoạt động</span>
            </a>
        </li>
        
        <li>
            <a href="/admin/setting">
                <i class="fa fa-cogs"></i>
                <span class="link-title">Cài đặt</span>
            </a>
        </li>
        
        <li class="nav-divider">
        </li>
        <li>
            <a href="/admin/logout">
                <i class="glyphicon glyphicon-log-in"></i>
                <span class="link-title">Đăng Xuất</span>
            </a>
        </li>
    </ul>
</div>
<script>
  function menuShow(){
    if($(".menu-block#left").length > 0){
      $(".menu-block").attr("id", "");
    }else
    {
      $(".menu-block").attr("id", "left");
    }
  }
  
  
</script>