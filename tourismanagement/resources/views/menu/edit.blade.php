@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'Menu', 'key' => 'Sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{route('menu.update', ['id'=>$menuFollowEdit->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên menu</label>
                                <input type="text" class="form-control"
                                       name="Ten"
                                       value="{{ $menuFollowEdit->Ten }}"
                                       placeholder="Nhập tên menu">
                            </div>

                            <div class="form-group">
                                <label>Menu cha</label>
                                <select class="form-control" name="id_Parent">
                                    <option value="0">Chọn menu cha</option>
                                    {!! $optionSelect !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

