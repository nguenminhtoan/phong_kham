@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-earphone')
@section('page', 'Banner')
@section('content')
<div class="box">
    <header>
        <div class="icons"><a href="/admin/voucher/new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm Mới</a></div>
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
                                <th width="8%">Hình ảnh</th>
                                <th width="15%">Tên Khuyến mãi</th>
                                <th width="10%">Link</th>
                                <th width="5%">áp dụng</th>
                                <th width="5%">giảm giá</th>
                                <th width="5%">Chọn</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($list as $row)
                            <tr>
                                <td align ="center">{{ $row->ID_KHUYENMAI }}</td>
                                <td align="center"><image src="/public{{ $row->HINHANH}}" style="height:70px" alt="{{$row->MOTA}}" /></td>
                                <td>{{ $row->TEN }}</td>
                                <td>{{ $row->LINK }}</td>
                                <td>{{ $row->APDUNG }}</td>
                                <td>{{ $row->GIAMGIA }}</td>
                                <td align ="center">
                                    <a href="/admin/voucher/edit/{{ $row->ID_KHUYENMAI }}" class="text-success" ><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="/admin/voucher/delete/{{ $row->ID_KHUYENMAI }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
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
