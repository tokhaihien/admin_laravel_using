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
                <form action="{{route('product_type_edit',['id' => $p->id])}}" method="post" id="frm-add">
                    @csrf
                    <div class="mb-3" class="d-flex">
                        <label for="" style="text-transform:uppercase;" class="form-label">Cập nhật</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" value="{{ $p->name}}" placeholder="Nhập tên loại sản phẩm...">
                        <button type="submit" class="btn btn-dark mt-2" id="btn-add"><i class="fas fa-edit"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- jquery -->
<script src="assets\js\jquery-3.7.1.min.js"></script>
@endsection