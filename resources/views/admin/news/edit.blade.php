@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-earphone')
@section('page', 'Banner')
@section('content')
<script src="/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({ 
  selector:'textarea',
  plugins: [ "advlist autolink lists link image charmap print preview anchor textcolor textcolor colorpicker",
              "searchreplace visualblocks code fullscreen",
              "insertdatetime media table contextmenu paste"],
  file_browser_callback: function(field_name, url, type, win) {
    sessionStorage.setItem("sent", field_name);
    window.open("/admin/upload", field_name, "width=650, height=500");
  },
  content_css : ["/css/style.css", "/css/custome.css"]
});
</script>
<div class="box">
    <header class="dark">
        <div class="icons" style="padding:3px">
            <a href="/admin/news" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>Trở Lại</a>
        </div>
        <h5>Thêm Tin Tức</h5>
    </header>
    <div class="body">
        <form action="/admin/news/update" method="post" class="form-horizontal" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-lg-4">Hình ảnh</label>
                <input type="hidden" name="ID_TINTUC" value="{{$new->ID_TINTUC}}" />
                <div class="col-lg-8">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail"  style="width: 400px; height: 150px;">
                        @if(!empty($new->HINHANH))
                            <img src="/public{{$new->HINHANH }}" />
                            @endif
                        </div>
                        <input type="hidden" value="{{ $new->HINHANH }}"  name="HINHANH" >
                        <div>
                            <span class="btn btn-default btn-file">
                                <input type="file" name="file" class="img" accept="image/*" >
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="control-label col-lg-4">Đường đẫn tin tức</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="LINK" value="{{ $new->LINK }}" class="form-control" placeholder="viết không để dấu" >
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <label class="control-label col-lg-4">Tên bản tin</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="TEN" value="{{ $new->TEN }}" class="form-control" placeholder="Tên bản tin" >
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Danh mục</label>
                <div class="col-lg-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <select name="ID_DANHMUC" class="form-control" >
                            @foreach($danhmuc as $item)
                            <option value="{{ $item->ID_DANHMUC }}">{{$item->TEN}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
            </div>
        
            
            <div class="form-group">
                <label class="control-label col-lg-4">nội dung</label>
                <div class="col-lg-8">
                    <textarea name="NOIDUNG" class="form-control tinymce" rows="20%">{{$new->NOIDUNG}}</textarea>
                </div>
            </div>
        
            <div class="form-group">
                <div class="col-lg-6">
                    <button name="huy" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-remove"></i>Hủy Bỏ</button>
                </div>
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>Lưu Lại</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(".fileinput-exists").click(function(){
        $('.img').val('');
        $(".fileinput-preview.thumbnail").html('');
    });
    $(".img").change(function(event) {
        var files = this.files;
        var img = new Image;
        img.src = window.URL.createObjectURL(files[0]);
        $(".fileinput-preview.thumbnail").html(img);
    });
</script>
@stop
