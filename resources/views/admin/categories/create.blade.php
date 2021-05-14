@extends('layouts.layout_admin')
@section('icon', 'fa fa-navicon')
@section('page', 'Danh mục')
@section('content')
<div class="box">
    <header class="dark">
        <div class="icons" style="padding:3px">
            <a href="/admin/categories" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>Trở Lại</a>
        </div>
        <h5>Thêm Danh mục</h5>
    </header>
    <div class="body">
        <form class="form-horizontal" action="/admin/categories/save" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
        
            <div class="form-group">
                <label class="control-label col-lg-4">Danh mục góc</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <select name="FK_DANHMUC" class="form-control">
                            <option value="" >--</option>
                            @foreach($list as $row)
                            @if (!isset($row->FK_DANHMUC))
                            <option value="{{$row->ID_DANHMUC}}" >{{$row->TEN}}</option>
                            @endif
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Đường đãn</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="LINK" value="{{ $new->LINK }}" class="form-control" placeholder="Tên viết không dau" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Tên danh mục</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="TEN" value="{{ $new->TEN }}" class="form-control" placeholder="Tên của danh mục" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Thứ tự sắp xếp</label>
                
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="number" name="SORT" value="{{ $new->SORT }}" class="form-control" placeholder="Thứ tự hiển thị của banner" >
                        
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
