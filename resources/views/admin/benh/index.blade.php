@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-earphone')
@section('page', 'Bệnh')
@section('content')
<div class="box">
    <header>
        <div class="icons"><a href="/admin/benh/new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm Mới</a></div>
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
                                <th width="25%">Tên bệnh</th>
                                <th width="10%">Mô tả</th>
                                <th width="7%">Sắp xếp</th>
                                <th width="5%">Chọn</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($list as $row)
                            <tr>
                                <td align ="center">{{ $row->id_benh }}</td>
                                <td>{{ $row->ten }}</td>
                                <td>{!! strip_tags($row->trieuchung) !!}</td>
                                <td align="center">{{ $row->sort }}</td>
                                <td align ="center">
                                    <a href="/admin/benh/edit/{{ $row->id_benh }}" class="text-success" ><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="/admin/benh/delete/{{ $row->id_benh }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
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
