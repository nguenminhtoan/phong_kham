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
    win.document.getElementById(field_name).value = url;
  }
});
</script>
<div class="box">
    <header class="dark">
        <div class="icons" style="padding:3px">
            <a href="/admin/benh" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>Trở Lại</a>
        </div>
        <h5>Chỉnh sửa Bệnh</h5>
    </header>
    <div class="body">
        <form class="form-horizontal" action="/admin/benh/update" method="post" >
            {{ csrf_field() }}
            
                   <input name="ID_BENH" value="{{ $new->id_benh }}" type="hidden" />
            <div class="form-group">
                <label class="control-label col-lg-4">Tên bệnh</label>
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" name="TEN" value="{{ $new->ten }}" class="form-control" placeholder="Tên của loại danh mục" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Thứ tự sắp xếp</label>
                
                <div class="col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="number" name="SORT" value="{{ $new->sort }}" class="form-control" placeholder="Thứ tự hiển thị của banner" >
                        
                    </div>
                </div>
                <span class="error right"></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-lg-4">Mô tả bệnh</label>
                <div class="col-lg-8">
                    <textarea name="TRIEUCHUNG" class="form-control tinymce" rows="20%">{{ $new->trieuchung }}</textarea>
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

@stop
