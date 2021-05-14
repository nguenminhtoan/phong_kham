@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-user')
@section('page', 'Người dùng')
@section('content')
<div class="box">
    <header class="dark">
        <div class="icons" style="padding:3px">
            <a href="/admin/customer" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>Trở Lại</a>
        </div>
        <h5>Thêm Banner</h5>
    </header>
    <div class="body">
        <form class="form-horizontal" action="/admin/customer/update" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <input type="hidden" name="ID_NGUOIDUNG" value="{{$new->ID_NGUOIDUNG}}" />
            <div class="form-group">
                <label class="control-label col-lg-4">Email </label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="EMAIL" value="{{ $new->EMAIL }}" class="form-control" placeholder="Địa chỉ email" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
        
            <div class="form-group">
                <label class="control-label col-lg-4">Tên người dùng</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="TEN" value="{{ $new->TEN }}" class="form-control" placeholder="Tên người dùng" >
                    </div>
                </div>
            </div>
        
            
            <div class="form-group">
                <label class="control-label col-lg-4">Sđt</label>
                
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="SDT" value="{{ $new->SDT }}" class="form-control" placeholder="Số điện thoại" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Địa chỉ</label>
                
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="DIACHI" value="{{ $new->DIACHI }}" class="form-control" placeholder="Địa chỉ" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Mật khẩu</label>
                
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="password" name="MATKHAU" value="{{ $new->MATKHAU }}" class="form-control" placeholder="Mật khẩu" >
                        
                    </div>
                </div>
                <span class="error right"></span>
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
