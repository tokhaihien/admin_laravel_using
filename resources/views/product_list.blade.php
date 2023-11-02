@extends('index')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div>
                    <h4 class="header-title mb-3">Danh sách sản phẩm</h4>
                </div>
            </div>
        </div>

        @if(session('msg'))
        <div class="alert alert-success mb-3" role="alert">
            {{session('msg')}}
        </div>
        @endif
        <div class="d-grid gap-2">
            <button type="button" name="btn-add" id="btn-add" class="btn btn-warning"><i class="fas fa-plus-circle"></i></button>
        </div>
        <div class="d-grid gap-2 d-none" id="undo">
            <button type="button" name="btn-add" id="btn-add" class="btn btn-secondary"><i class="fas fa-sort-up"></i></button>
        </div>
        <div class="row d-none" id="frm-add">
            <div class="col-4 bg-light m-2">
                <div>
                    <h4 class="header-title mb-3">Thêm sản phẩm mới</h4>
                </div>
                <div class="frm">
                    <form action="{{route('product_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nhập tên sản phẩm...">
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
                        <button type="submit" class="btn btn-warning mt-2" id="btn-add"><i class="fas fa-plus-circle"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-4 bg-light m-2" id="img_chose">
                <img id="pre_img" src="{{asset('images/products/noimg.png')}}" alt="Lỗi ảnh" class="img-fluid rounded-top d-block" style="width:100%;height:100%;vertical-align:middle;filter: drop-shadow(0 0 2px blue);margin-left:auto;margin-right:auto;">
            </div>
        </div>



        <div class="row">

            <div class="col-lg-12">
                <div class="mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;">Hình ảnh</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Loại sản phẩm</th>
                                    <th scope="col">Giá bán</th>
                                    <th scope="col">Tồn kho</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Tùy chỉnh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lstP as $p)
                                <tr style="vertical-align: middle;">
                                    <th scope="row">
                                        <img src="{{$p->images[0]->url}}" class="img-fluid rounded-top d-block" style="width:90px;vertical-align:middle;filter: drop-shadow(0 0 2px blue);margin-left:auto;margin-right:auto;" alt="">
                                    </th>
                                    <td style="vertical-align: middle;">{{$p->name}}</td>
                                    <td style="vertical-align: middle;">{{$p->product_types->name}}</td>
                                    <td style="vertical-align: middle;">{{$p->price}}</td>
                                    <td style="vertical-align: middle;">{{$p->quantity}}</td>
                                    <td style="vertical-align: middle;">{{$p->delete_at != 'NULL'? 'Có sẵn': 'Ngưng bán'}}</td>
                                    <td style="vertical-align: middle;">
                                        <a href="{{route('product_show', ['id' => $p->id])}}" role="button">
                                            <i id="i_edit" style="color:green;" class="fas fa-edit mx-2"></i>
                                        </a>|
                                        <a href="{{route('product_del', ['id' => $p->id])}}" role="button" onclick="return confirm('Bạn muốn xóa sản phẩm {{$p->name}}?')">
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
        </div>
    </div>
</div>

<!-- jquery -->
<script src="assets\js\jquery-3.7.1.min.js"></script>

<script>
    $('#btn-add').click(()=>{
        $('#frm-add').removeClass("d-none");
        $('#frm-add').slideDown();
        $('#btn-add').addClass("d-none");
        $('#undo').removeClass("d-none");
    })

    $('#undo').click(()=>{
        $('#frm-add').addClass("d-none");
        $('#frm-add').slideUp();
        $('#btn-add').removeClass("d-none");
        $('#undo').addClass("d-none");
    })


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