@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'Danh Mục', 'key' => 'Sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{route('danhmuc.update', ['id'=>$danhmuc->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control"
                                       name="TenDanhMuc"
                                       value="{{ $danhmuc->TenDanhMuc }}"
                                       placeholder="Nhập tên danh mục">
                            </div>

                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control" name="id_Parent">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

