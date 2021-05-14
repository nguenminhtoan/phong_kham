@extends('layouts.layout_admin')
@section('icon', 'fa fa-navicon')
@section('page', 'Danh mục')
@section('content')
<div class="box">
    <header>
        <div class="icons"><a href="/admin/categories/new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm Mới</a></div>
        <h5>Danh mục</h5>
    </header>

    <div class="body">
        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-hover table-striped dataTable">
                        <thead>
                            <tr>
                                <th width="3%">Mã</th>
                                <th width="25%">Tên</th>
                                <th width="20%">Link</th>
                                <th width="7%">Sắp xếp</th>
                                <th width="5%">Chọn</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($list as $row)
                            @if(!isset($row->FK_DANHMUC))
                            <tr>
                                <td align ="center">{{ $row->ID_DANHMUC }}</td>
                                <td>{{$row->TEN}}</td>
                                <td>{{ $row->LINK }}</td>
                                <td align="center">{{ $row->SORT }}</td>
                                <td align ="center">
                                    <a href="/admin/categories/edit/{{ $row->ID_DANHMUC }}" class="text-success" ><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="/admin/categories/delete/{{ $row->ID_DANHMUC }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                                @foreach($list as $item)
                                    @if(isset($item->FK_DANHMUC) && $row->ID_DANHMUC == $item->FK_DANHMUC)
                                    <tr>
                                        <td align ="center">{{ $item->ID_DANHMUC }}</td>
                                        <td>--- {{$item->TEN}}</td>
                                        <td>{{ $item->LINK }}</td>
                                        <td align="center">{{ $item->SORT }}</td>
                                        <td align ="center">
                                            <a href="/admin/categories/edit/{{ $item->ID_DANHMUC }}" class="text-success" ><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="/admin/categories/delete/{{ $item->ID_DANHMUC }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endif
                            @endforeach
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
