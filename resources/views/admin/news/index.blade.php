@extends('layouts.layout_admin')
@section('icon', 'fa fa-newspaper-o')
@section('page', 'News')
@section('content')
<div class="box">
    <header>
        <div class="icons"><a href="/admin/news/new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm Mới</a></div>
        <h5>Tin Tức</h5>
    </header>

    <div class="body">
        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            
            <div class="row">
                <div class="col-sm-12">
                    <table id="dataTable" class="table table-bordered table-hover table-striped dataTable">
                        <thead>
                            <tr>
                                <th width="3%">Mã</th>
                                <th width="15%">Hình ảnh</th>
                                <th width="15%">Liên kết</th>
                                <th width="15%">Tiêu Đề</th>
                                <th width="15%">Danh Mục</th>
                                <th width="15%">Người viết</th>
                                <th width="5%">Chọn</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($list as $row)
                            <tr>
                                <td align ="center">{{ $row->ID_TINTUC }}</td>
                                <td align="center"><img src="/public{{$row->HINHANH }}" height="70px"></td>
                                <td>{{ $row->LINK }}</td>
                                <td>{{ $row->TEN }}</td>
                                <td>{{ $row->DANHMUC }}</td>
                                <td>{{ $row->HOTEN }}</td>
                                <td align ="center">
                                    <a href="/admin/news/edit/{{ $row->ID_TINTUC }}" class="text-success" ><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="/admin/news/delete/{{ $row->ID_TINTUC }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
