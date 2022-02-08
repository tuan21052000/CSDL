@extends('admin.app')
@section('title') Sản Phẩm @endsection
@section('content')
<main class="app-content">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a style="text-decoration:none;font-size:20px" href="{{ route('admin.sanpham.add') }}">Thêm sản phẩm</a>
    <table class="table table-striped">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình Ảnh</th>
            <th>Số Lượng</th>
            <th>Tình Trạng</th>
            <th>Đơn Giá</th>
            <th>Loại Sản Phẩm</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->masp }}</td>
            <td>{{ $item->tensp }}</td>
            <td>{{ $item->hinhanh }}</td>
            <td>{{ $item->soluong }}</td>
            <td>{{ $item->tinhtrang }}</td>
            <td>{{ $item->dongia }}</td>
            <td>{{ $item->loaispid}}</td>
            <td style="padding:5px"><img style="width:100px" src="{{ asset($item->Anh) }}" alt=""></td>
            <td style="padding:0px">
                <a href="{{ route('admin.sanpham.edit',$item->id) }}"><img style="width:30px" src="{{ asset("backend/icon/edit.jpg") }}"></img></a>
                <a href="{{ route('admin.sanpham.delete',$item->id) }}"><img style="width:45px" src="{{ asset("backend/icon/remove.jpg") }}"></img></i></a>
            </td>
        </tr>
        @endforeach

    </table>
  </main>

@endsection
