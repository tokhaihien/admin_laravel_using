@extends('index')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="table-responsive-lg m-5">
            <a href="#" class="btn btn-warning my-2">Xuất hóa đơn</a>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Mã hóa đơn</th>
                        <th scope="col">Nhà cung cấp</th>
                        <th scope="col">Người nhập</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Tùy chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lst_invoices as $hd)
                    <tr class="">
                        <td>{{$hd -> id}}</td>
                        <td>{{$hd->suppliers->name}}</td>
                        <td>{{$hd -> i_person}}</td>
                        <td>{{$hd -> total}} (VND)</td>
                        <td style="vertical-align: middle;">
                            <a href="{{route('i_detail_invoice', ['id' => $hd->id])}}" role="button">
                                <i class="fas fa-receipt mx-2"></i></i>
                            </a>|
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