@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-facetime-video')
@section('page', 'Bệnh')
@section('content')

<div class="box">
    <header class="dark">
        <div class="icons" style="padding:3px">
            <a href="/admin/video" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>Trở Lại</a>
        </div>
        <h5>Thêm Bệnh</h5>
    </header>
    <div class="body">
        <form class="form-horizontal" action="/admin/video/save" method="post" >
            {{ csrf_field() }}
            
        
            <div class="form-group">
                <label class="control-label col-lg-4">Video</label>
                <div class="col-lg-8">
                    <textarea name="VIDEO" class="form-control" rows="15" cols="200" placeholder="Thẻ nhúng ifram youtube" >{{ $new->VIDEO }}</textarea>
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
