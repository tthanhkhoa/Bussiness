@extends('client.compoment.header',['thongtin' => $thongtin])
@section('slider')
    @include('client.compoment.slider',['slider' => $slider])
@endsection

@section('home')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Các sản phẩm nổi bật</h2>
    @foreach($sanpham as $item)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <a href="{{route('chitietsanpham',['id'=>$item->id])}}">
                        <img  width="80" height="180" alt="80x180"
                              src="{{isset($item->Images->first()->image_url) ? $item->Images->first()->image_url : asset('images/defaut/S2B.jpg')}}"  />
                        <h2>{{isset($item->giatien) ? number_format($item->giatien) : '0' }}</h2>
                        <p>{{isset($item->tensanpham) ? $item->tensanpham : 'S2B Beauty'}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                    </a>

                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào ưu thích</a></li>
                    {{--<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
   @endforeach





</div>


{{--<div class="category-tab"><!--category-tab-->--}}
    {{--<div class="col-sm-12">--}}
        {{--<ul class="nav nav-tabs">--}}
            {{--<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>--}}
            {{--<li><a href="#blazers" data-toggle="tab">Blazers</a></li>--}}
            {{--<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>--}}
            {{--<li><a href="#kids" data-toggle="tab">Kids</a></li>--}}
            {{--<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="tab-content">--}}
        {{--<div class="tab-pane fade active in" id="tshirt" >--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery1.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery2.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery3.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery4.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="tab-pane fade" id="blazers" >--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery4.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery3.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery2.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery1.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="tab-pane fade" id="sunglass" >--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery3.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery4.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery1.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery2.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="tab-pane fade" id="kids" >--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery1.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery2.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery3.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery4.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--<div class="tab-pane fade" id="poloshirt" >--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery2.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery4.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery3.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="product-image-wrapper">--}}
                    {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                            {{--<img src="images/home/gallery1.jpg" alt="" />--}}
                            {{--<h2>$56</h2>--}}
                            {{--<p>Easy Polo Black Edition</p>--}}
                            {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--@section('recommended')--}}
            {{--@include('client.compoment.recommended')--}}
        {{--@endsection--}}
    {{--</div>--}}
    {{--</div>--}}

{{--<!--/category-tab-->--}}


{{--</div>--}}
@section('slidebar')
    @include('client.compoment.slidebar',['TheLoai' => $TheLoai])
@endsection

@endsection