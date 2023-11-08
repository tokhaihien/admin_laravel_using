@extends('index')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="table-responsive-lg m-5">
            <a href="" class="btn btn-warning my-2">Xuất file PDF chi tiết hóa đơn</a>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Mã hóa đơn</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá nhập</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Tùy chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cthd as $ct)
                    <tr class="">
                        <td>{{$ct -> i_invoices_id}}</td>
                        <td>{{$ct -> products -> name}}</td>
                        <td>{{$ct -> quantity}}</td>
                        <td>{{$ct -> i_price}}</td>
                        <td>{{$ct -> e_price}}</td>
                        <td>{{$ct -> total}}</td>
                        <td>
                            <a href="" role="button">
                                <i id="i_edit" style="color:green;" class="fas fa-edit mx-2"></i>
                            </a>|
                            <a href="" role="button" onclick="return confirm('Bạn muốn xóa sản phẩm ?')">
                                <i style="color:red;" class="fas fa-trash mx-2"></i></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection