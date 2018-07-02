@extends('client.compoment.header',['thongtin' => $thongtin])
@section('slider')
    @include('client.compoment.slider',['slider' => $slider])
@endsection

@section('home')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Các sản phẩm nổi bật</h2>
    @foreach($sanpham as $item)
    <div class="col-sm-4" >
        <div class="product-image-wrapper" >
            <div class="single-products" >
                <div class="productinfo text-center">
                    <a href="{{route('chitietsanpham',['id'=>$item->id])}}">
                        <img  width="80" height="180" alt="80x180"
                              src="{{isset($item->Images->first()->image_url) ? $item->Images->first()->image_url : asset('images/defaut/S2B.jpg')}}"  />
                        <div style="display: inline-grid" >
                            <h2 >{{isset($item->giatien) ? number_format($item->giatien) : '0' }} VNĐ</h2>
                            <p style="height:20px;" >{{isset($item->tensanpham) ? $item->tensanpham : 'S2B Beauty'}}</p>
                            <a href="{{route('addcart')}}" class="btn btn-default " ><i  class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                        </div>


                    </a>
                </div>
            </div>
        </div>
    </div>
   @endforeach
</div>
@section('slidebar')
    @include('client.compoment.slidebar',['TheLoai' => $theloai])
@endsection
@endsection