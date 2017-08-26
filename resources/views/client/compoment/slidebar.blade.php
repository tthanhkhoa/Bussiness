
    <h2>Sản Phẩm</h2>


    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        @foreach($TheLoai as $item )
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#{{isset($item->tentheloai) ? $item->tentheloai  : ''}}">
                            {{--<span class="badge pull-right">--}}
                                {{--<i class="fa fa-plus"></i>--}}
                            {{--</span>--}}
                            {{ isset($item->tentheloai) ? $item->tentheloai : 'Product name' }}
                        </a>
                    </h4>
                </div>
                <div id="{{isset($item->tentheloai) ? $item->tentheloai : ''}}" class="panel-collapse collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <ul>
                            @foreach($item->SanPham as $sanpham)
                                <li><a href="#">{{isset($sanpham->tensanpham) ? $sanpham->tensanpham : ''}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{--<!--/category-products-->--}}

    {{--<div class="brands_products"><!--brands_products-->--}}
        {{--<h2>Brands</h2>--}}
        {{--<div class="brands-name">--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>--}}
                {{--<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>--}}
                {{--<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>--}}
                {{--<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>--}}
                {{--<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>--}}
                {{--<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>--}}
                {{--<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div><!--/brands_products-->--}}

    {{--<div class="price-range"><!--price-range-->--}}
        {{--<h2>Price Range</h2>--}}
        {{--<div class="well text-center">--}}
            {{--<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />--}}
            {{--<b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>--}}
        {{--</div>--}}
    {{--</div><!--/price-range-->--}}

    <div class="shipping text-center"><!--shipping-->
        <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/20994205_779346652247356_7845732814713790109_n.jpg?oh=8e9b61cb18551424529d25c5fdd5ad55&oe=5A15582B" alt="" />
    </div><!--/shipping-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>