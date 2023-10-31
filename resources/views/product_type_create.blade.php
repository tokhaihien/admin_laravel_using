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

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div class="mt-1">
                    <div class="add_pt">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection