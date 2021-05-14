@extends('layouts.layout_admin')
@section('icon', 'fa fa-cogs')
@section('page', 'Setting')
@section('content')
<script src="/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({ 
  selector:'#option_5',
  plugins: [ "advlist autolink lists link image charmap print preview anchor textcolor textcolor colorpicker",
              "searchreplace visualblocks code fullscreen",
              "insertdatetime media table contextmenu paste"],
  file_browser_callback: function(field_name, url, type, win) {
    window.open("/admin/upload", "MyWindow", "width=650, height=500");
  },
  content_css : "/css/style.css" 
});
</script>
<style>
    .input-group{
      display: block;
    }
</style>
<header class="dark">
    <h5>Chỉnh sửa nội dung tùy chọn</h5>
</header>
<div class="body">
    <form action="/admin/setting/update" method="POST" >
        {{ csrf_field() }}
      <div class="form-group col-lg-4">
          <label class="row">Về chúng tôi: </label>
          <div class="col-lg-12">
              <div class="input-group">
                  <textarea name="option[1]" class="form-control" cols="50" rows="5" >{{ $option[1] }}</textarea>
              </div>
          </div>
      </div>

      <div class="form-group col-lg-4">
          <label>Bác sĩ: </label>
          <div class="col-lg-12">
              <div class="input-group">
                  <textarea name="option[2]" class="form-control" cols="50" rows="5" >{{ $option[2] }}</textarea>
              </div>
          </div>
      </div>

      <div class="form-group col-lg-4">
          <label>Thời gian làm việc: </label>
          <div class="col-lg-12">
              <div class="input-group">
                  <label>Thứ 2 - Thứ 7</label>
                  <textarea name="option[3]" class="form-control" >{{ $option[3] }}</textarea>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="input-group">
                  <label>Chủ nhật</label>
                  <textarea name="option[4]" class="form-control" >{{ $option[4] }}</textarea>
              </div>
          </div>
      </div>
    
    
      <div class="form-group col-lg-8">
          <label>Vì sao chọn chúng tôi: </label>
          <div class="col-lg-12">
              <div class="input-group">
                  <textarea id="option_5" name="option[5]" class="form-control" cols="65" rows="20" >{{ $option[5] }}</textarea>
              </div>
          </div>
      </div>
    
      <div class="form-group col-lg-4">
          <label> Nội dung chat: </label>
          <div class="col-lg-12">
              <div class="input-group">
                  <textarea name="option[6]" class="form-control" cols="60" rows="5" >{{ $option[6] }}</textarea>
              </div>
          </div>
          
          <div class="col-lg-12">
              <label> Nội dung chat sau 3 phut: </label>
              <div class="input-group">
                  <textarea name="option[12]" class="form-control" cols="60" rows="5" >{{ $option[12] }}</textarea>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="input-group">
              <label>Link facebook: </label>
                    <input value="{{ $option[7] }}" name="option[7]" class="form-control"/>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="input-group">
              <label>Link youtube: </label>
                    <input value="{{ $option[8] }}" name="option[8]" class="form-control"/>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="input-group">
              <label>Link Zalo: </label>
                    <input value="{{ $option[9] }}" name="option[9]" class="form-control"/>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="input-group">
              <label>Link Maps: </label>
                    <input value="{{ $option[10] }}" name="option[10]" class="form-control"/>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="input-group">
              <label>Hot line: </label>
                    <input value="{{ $option[11] }}" name="option[11]" class="form-control"/>
              </div>
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
@stop
