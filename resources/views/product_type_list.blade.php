@extends('index')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div>
                    <h4 class="header-title mb-3">Danh sách loại sản phẩm</h4>
                </div>
            </div>
        </div>

        @if(session('msg'))
            <div class="alert alert-success mb-3" role="alert">
                {{session('msg')}}
            </div>
            @endif
        <div class="row">
            <div class="col-lg-4">
                <form action="{{route('product_type_store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" style="text-transform:uppercase;" class="form-label">Thêm mới</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nhập tên loại sản phẩm...">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Thêm</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-8">
                <div class="mt-2">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Mã loại</th>
                                    <th scope="col">Tên loại</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Tùy chỉnh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lstPT as $pt)
                                <tr>
                                    <th scope="row">{{$pt->id}}</th>
                                    <td>{{$pt->name}}</td>
                                    <td>{{$pt->delete_at != 'NULL'? 'Hoạt động': 'Không hoạt động'}}</td>
                                    <td>
                                        <span><i style="color:green;" class="fas fa-edit mx-2"></i></span>|
                                        <span><i style="color:red;" class="fas fa-trash mx-2"></i></span>
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
</div>
@endsection