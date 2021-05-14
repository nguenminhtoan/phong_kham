@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-user')
@section('page', 'Người dùng')
@section('content')
<div class="box">
    <header>
        <div class="icons"><a href="/admin/customer/new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm Mới</a></div>
        <h5>Danh Mục Khách Hàng</h5>
    </header>

    <div class="body">
        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table id="dataTable" class="table table-bordered table-hover table-striped dataTable">
                        <thead>
                            <tr>
                                <th width="4%">Mã</th>
                                <th width="15%">Tên người dùng</th>
                                <th width="10%">Số ĐT</th>
                                <th width="10%">E-Mail</th>
                                <th width="20%">Địa Chỉ</th>
                                <th width="5%">Chọn</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($list as $row)
                            <tr>
                                <td align ="center">{{ $row->ID_NGUOIDUNG }}</td>
                                <td>{{ $row->TEN }}</td>
                                <td>{{ $row->SDT }}</td>
                                <td>{{ $row->EMAIL }}</td>
                                <td>{{ $row->DIACHI }}</td>
                                <td align ="center">
                                    <a href="/admin/customer/edit/{{ $row->ID_NGUOIDUNG }}" class="text-success" ><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="/admin/customer/delete/{{ $row->ID_NGUOIDUNG }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
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
