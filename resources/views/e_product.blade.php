@extends('index')
@section('content')
<div class="content">
    <div class="container-fluid">
        @if(session('msg-c'))
        <div class="alert alert-success mb-3" role="alert">
            {{session('msg-c')}}
        </div>
        @endif
        <div class="mb-9 mt-3">
            <label for="khac_hhang" class="form-label m-0">Khách hàng</label>
            <select class="form-control" name="khach_hang" id="id_khachhang" onchange="changeID(this);">
                <option value="1">Chọn khách hàng</option>
                @foreach($guest as $g)
                <option value="{{$g->id}}">{{$g->fullname}}</option>
                @endforeach
            </select>
        </div>
        <div class="col mt-2" style="display:flex;">
            <div class="col-lg-3">

                <div class="mb-9">
                    <label for="name_product" class="form-label m-0">Tên sản phẩm</label>
                    <select class="form-control" name="name_product" id="product_name" onchange="changePrice();">
                        @foreach($lst_pro as $pro)
                        <option value="{{$pro->id}}" data-price="{{$pro->price}}">{{$pro->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-9">
                    <label for="quantity" class="form-label m-0 mt-2">Số lượng</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Nhập số lượng sản phẩm">
                </div>

                <div class="mb-9">
                    <label for="price-ban" class="form-label m-0 mt-2">Giá bán</label>
                    <input type="text" class="form-control" name="price_ban" id="price_ban" placeholder="Giá sản phẩm" readonly >
                </div>
                <br>
                <button type="button" id="updateButton" class="btn btn-warning" onclick="productUpdate();">Thêm vào đơn bán hàng</button>



            </div>
            <form action="{{route('do_e_product')}}" method="post" class="col-lg-9">
                @csrf
                <!-- Table danh sách -->
                <div class="mt-2">
                    <div class="table-responsive-lg">
                        <table class="table table-dark" id="product_table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Giá bán</th>
                                    <th scope="col">Thành tiền</th>
                                    <th scope="col">Tùy chỉnh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr class="">
                            <td>1</td>
                            <td>Cà phê sữa</td>
                            <td>Coffee</td>
                            <td>50</td>
                            <td>60.000 VND</td>
                            <td>Giá nhập * Số lượng</td>
                            <td>
                                <a style="color: yellow;" href="">Sửa</a> | <a style="color: red;" href="">Xóa</a>
                            </td>
                        </tr> -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- Đặt hàng -->
                <input type="hidden" name="id_ncc" id="id_ncc" value="1">
                <button type="submit" class="btn btn-success mt-3 float-right p-4">Lưu</button>
            </form>

        </div>
    </div>
</div>

<script>
    //Thêm một dòng sản phẩm vào danh sách đặt hàng
    function productUpdate() {
        if ($("#product_name").val() != null && $("#product_name").val() != '') {
            // Add product to Table
            productAddToTable();

            // Clear form fields
            formClear();

            // Focus to product name field
            $("#quantity").focus();
        }

        function productAddToTable() {
            var stt = $("#product_table tbody tr").length + 1;

            var row = `
                <tr class=''>
                <td>${stt}</td>
                <td>${$("#product_name").find(':selected').text()}<input type="hidden" name='sp_id[]' value='${$("#product_name").find(':selected').val()}'/></td>
                <td>${$("#quantity").val()}<input type="hidden" name='quantity[]' value='${$("#quantity").val()}'/></td>
                <td>${$("#price_ban").val()}  VND<input type="hidden" name='price_ban[]' value='${$("#price_ban").val()}'/></td>
                <td>${$("#quantity").val() * $("#price_nhap").val()}  VND<input type="hidden" name='thanh_tien[]' value='${$("#quantity").val() * $("#price_ban").val()}'/></td>
                <td><button type='submit' class='btn btn-success'>Sửa</button> | <button type='button' class='btn btn-danger' onclick='productDelete(this)'>Xóa</button></td>
                </tr>
            `;

            $("#product_table tbody").append(row);
        }

        function formClear() {
            $("#product_name").val("");
            $("#quantity").val("");
            $("#price_nhap").val("");
            $("#price_ban").val("");
        }
    }


    // function productDelete(ctl) {
    //     $(ctl).parents("tr").remove();
    // }

    function changeID(obj) {
        $("#id_ncc").val(obj.value);
    }

    function changePrice(){
        var $selected = $('#product_name').children(":selected");
        $("#price_ban").val($selected.data('price'));
    };
</script>
@endsection