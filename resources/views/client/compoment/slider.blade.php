{{--@extends('client.compoment.header')--}}
{{--@section('slider')--}}
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    @php
                        $i = 0;
                    @endphp
                    <div class="carousel-inner">
                        @foreach($slider as $item)
                            @if($i == 0)
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <h1><span>S2B</span> BEAUTY</h1>
                                        <h2>{{isset($item->gioithieu) ? $item->gioithieu : ''}}</h2>
                                        <p>{{isset($item->contact) ? $item->contact : ''}} </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img width="400" height="300" src="{{isset($item->image_url) ? $item->image_url : ''}}" class="girl img-responsive" alt="200x200" />
                                        <img src="images/home/pricing.png"  class="pricing" alt="200x200" />
                                    </div>
                                </div>
                            @else
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>S2B</span> BEAUTY</h1>
                                        <h2>{{isset($item->gioithieu) ? $item->gioithieu : ''}}</h2>
                                        <p>{{isset($item->contact) ? $item->contact : ''}} </p>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{isset($item->image_url) ? $item->image_url : ''}}" class="girl img-responsive" alt="" />
                                        {{--<img src="images/home/pricing.png"  class="pricing" alt="" />--}}
                                    </div>
                                </div>
                            @endif
                                @php
                                    $i++;
                                @endphp
                        @endforeach
                        {{--<div class="item active">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<h1><span>E</span>-SHOPPER</h1>--}}
                                {{--<h2>100% Responsive Design</h2>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
                                {{--<button type="button" class="btn btn-default get">Get it now</button>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />--}}
                                {{--<img src="images/home/pricing.png"  class="pricing" alt="" />--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="item">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<h1><span>E</span>-SHOPPER</h1>--}}
                                {{--<h2>Free Ecommerce Template</h2>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
                                {{--<button type="button" class="btn btn-default get">Get it now</button>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />--}}
                                {{--<img src="images/home/pricing.png" class="pricing" alt="" />--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
{{--@endsection--}}