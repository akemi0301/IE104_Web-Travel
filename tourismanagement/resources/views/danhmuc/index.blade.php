@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Danh Mục', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('danhmuc.create') }}" class="btn btn-success float-right m-2">Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($danhmucs as $danhmuc)
                                <tr>
                                    <th scope="row">{{$danhmuc->id}}</th>
                                    <td>{{$danhmuc->TenDanhMuc}}</td>
                                    <td>
                                        <a href="{{ route('danhmuc.edit', ['id' => $danhmuc->id]) }}"
                                           class="btn btn-default">Chỉnh Sửa</a>
                                        <a href="{{ route('danhmuc.delete',['id' => $danhmuc->id]) }}"
                                           class="btn btn-danger">Xóa</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $danhmucs->links('pagination::bootstrap-4') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

