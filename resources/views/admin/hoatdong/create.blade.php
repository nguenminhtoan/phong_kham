@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-earphone')
@section('page', 'Banner')
@section('content')
<div class="box">
    <header class="dark">
        <div class="icons" style="padding:3px">
            <a href="/admin/hoatdong" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>Trở Lại</a>
        </div>
        <h5>Thêm Banner</h5>
    </header>
    <div class="body">
        <form class="form-horizontal" action="/admin/hoatdong/save" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <div class="form-group">
                
                <label class="control-label col-lg-4">Hình ảnh</label>
                
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
                <label class="control-label col-lg-4">Tên hoạt động</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="TEN" value="{{ $new->TEN }}" class="form-control" placeholder="Tên của loại danh mục" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
        
            
            <div class="form-group">
                <label class="control-label col-lg-4">Thứ tự sắp xếp</label>
                
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="number" name="SORT" value="{{ $new->SORT }}" class="form-control" placeholder="Thứ tự hiển thị của hoatdong" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            
            <div class="form-group">
                <label class="control-label col-lg-4">Mô tả hoạt động</label>
                <div class="col-lg-8">
                    <textarea name="MOTA" class="form-control tinymce" rows="20%">{{ $new->MOTA }}</textarea>
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
