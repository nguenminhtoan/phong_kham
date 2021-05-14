@extends('layouts.layout_admin')
@section('icon', 'glyphicon glyphicon-facetime-video')
@section('page', 'Video')
@section('content')
<div class="box">
    <header>
        <div class="icons"><a href="/admin/video/new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm Mới</a></div>
        <h5>Video</h5>
    </header>

    <div class="body">
        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table id="dataTable" class="table table-bordered table-hover table-striped dataTable">
                        <thead>
                            <tr>
                                <th width="3%">Mã</th>
                                <th width="8%">Video</th>
                                <th width="5%">Chọn</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($list as $row)
                            <tr>
                                <td align ="center">{{ $row->ID_VIDEO }}</td>
                                <td>{!! $row->VIDEO !!}</td>
                                <td align ="center">
                                    <a href="/admin/video/delete/{{ $row->ID_VIDEO }}" class="text-danger" onclick="return DeleteRow();" ><i class="glyphicon glyphicon-trash"></i></a>
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
