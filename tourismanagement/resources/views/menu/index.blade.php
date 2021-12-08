@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Menu', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('menu.create') }}" class="btn btn-success float-right m-2">Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên menu</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($menu as $menus)
                                <tr>
                                    <th scope="row">{{$menus->id}}</th>
                                    <td>{{$menus->Ten}}</td>
                                    <td>
                                        <a href="{{ route('menu.edit', ['id'=> $menus->id]) }}"
                                           class="btn btn-default">Chỉnh Sửa</a>
                                        <a href="{{ route('menu.delete', ['id'=> $menus->id])}}"
                                           class="btn btn-danger">Xóa</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $menu->links('pagination::bootstrap-4') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

