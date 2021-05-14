@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-earphone')
@section('page', 'Banner')
@section('content')
<div class="box">
    <header>
        <div class="icons"><a href="/admin/banner/new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm Mới</a></div>
        <h5>Banner</h5>
    </header>

    <div class="body">
        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table id="dataTable" class="table table-bordered table-hover table-striped dataTable">
                        <thead>
                            <tr>
                                <th width="3%">Mã</th>
                                <th width="25%">Hình ảnh</th>
                                <th width="20%">Link</th>
                                <th width="10%">Mô tả</th>
                                <th width="7%">Sắp xếp</th>
                                <th width="5%">Chọn</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($list as $row)
                            <tr>
                                <td align ="center">{{ $row->ID_BANNER }}</td>
                                <td align="center"><image src="/public{{ $row->HINHANH}}" style="height:70px" alt="{{$row->MOTA}}" /></td>
                                <td>{{ $row->LINK }}</td>
                                <td>{{ $row->MOTA }}</td>
                                <td align="center">{{ $row->SORT }}</td>
                                <td align ="center">
                                    <a href="/admin/banner/edit/{{ $row->ID_BANNER }}" class="text-success" ><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="/admin/banner/delete/{{ $row->ID_BANNER }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
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
