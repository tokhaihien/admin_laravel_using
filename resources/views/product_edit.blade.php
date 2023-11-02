@extends('index')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div>
                    <h4 class="header-title mb-3">Cập nhật sản phẩm</h4>
                </div>
            </div>
        </div>
        <div class="row" id="frm-add">
            <div class="col-4 bg-light m-2">
                <div>
                    <h4 class="header-title mb-3">sản phẩm</h4>
                </div>
                <div class="frm">
                    <form action="{{route('product_edit', ['id' => $P->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" value="{{$P->name}}" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nhập tên sản phẩm...">
                        </div>
                        <div class="mb-3">
                            <label for="product_type" class="form-label">Loại sản phẩm</label>
                            <select class="form-select form-select-lg form-control" name="product_type" id="product_type">
                                @foreach($lstPT as $pt)
                                <option value="{{$pt->id}}">{{$pt->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Chọn ảnh</label>
                            <input type="file" class="form-control" name="_img" id="file_img" placeholder="chọn ảnh đại diện" aria-describedby="fileHelpId">
                        </div>
                        <button type="submit" class="btn btn-info mt-2"><i style="color:green;" class="fas fa-edit mx-2"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-4 bg-light m-2" id="img_chose">
                <img id="pre_img" src="{{asset($P->images[0]->url)}}" alt="Lỗi ảnh" class="img-fluid rounded-top d-block" style="width:100%;height:100%;vertical-align:middle;filter: drop-shadow(0 0 2px blue);margin-left:auto;margin-right:auto;">
            </div>
        </div>
    </div>
</div>

<!-- jquery -->
<script src="assets\js\jquery-3.7.1.min.js"></script>

<script>
    const input = document.getElementById('file_img');
    const image = document.getElementById('pre_img');

    input.addEventListener('change', (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
    });
</script>
@endsection