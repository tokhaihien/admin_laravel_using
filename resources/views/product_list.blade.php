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

        <div class="row">
  
            <div class="col-lg-12">
                <div class="mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;">Hình ảnh</th>
                                    <th scope="col">Tên sản phẩm</th>
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
                                    <td style="vertical-align: middle;">{{$p->price}}</td>
                                    <td style="vertical-align: middle;">{{$p->quantity}}</td>  
                                    <td style="vertical-align: middle;">{{$p->delete_at != 'NULL'? 'Có sẵn': 'Ngưng bán'}}</td>
                                    <td style="vertical-align: middle;">
                                        <span><i style="color:green;"  class="fas fa-edit mx-2"></i></span>|
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