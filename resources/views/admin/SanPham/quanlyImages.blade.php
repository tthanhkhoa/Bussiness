@extends('admin.header')

@section('gallery')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{!! route('sanphamid',['id'=> isset($masanpham) ? $masanpham->matheloai : '' ]) !!}">Trở về</a>
                    </li>
                    <li class="active">Bộ sưu tập</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Bộ sưu tập
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            {{isset($masanpham) ? $masanpham->tensanpham : ''}}
                        </small>
                        <a class="blue" href="{!! route('chitietsanpham',['id'=> isset($masanpham) ? $masanpham->id : '' ]) !!}" style="float: right;">
                            <i class="ace-icon glyphicon glyphicon-plus"></i> Đăng bài
                        </a>
                    </h1>

                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div>
                            <ul id="images" data-role="listview" class="ace-thumbnails clearfix">
                                <input type="hidden" id="masanpham" value="{{isset($masanpham) ? $masanpham->id : ''}}">
                                @foreach($getImageSP as $item)

                                <li>
                                    <a href="{{isset($item->image_url) ? $item->image_url : ''}}" data-rel="colorbox">

                                        <img width="150" height="150" alt="150x150" src="{{$item->image_url}}" />
                                        <div class="text">
                                            <div class="inner">Sample Caption on Hover</div>
                                        </div>
                                    </a>

                                    {{--<div class="tools tools-bottom">--}}

                                        {{--<a href="#">--}}
                                            {{--<i class="ace-icon fa fa-times red"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                </li>
                                @endforeach

                                <li id="add_images">
                                    <form enctype="multipart/form-data">
                                    <a href="#" onclick="document.getElementById('upload').click(); return false" >

                                            <img width="150" height="150" alt="150x150" src="{{asset('assets/images/gallery/add.png')}}" />
                                    </a>
                                    </form>
                                </li>



                            </ul>
                            {!! csrf_field() !!}
                            <input type="file" id="upload" name="upload" style="visibility: hidden; width: 1px; height: 1px" multiple />

                        </div><!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script>
        $('#upload').change(function (e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var file = $('#upload')[0].files[0];
            var masanpham = $('#masanpham').val();
            var formData = new FormData();
            formData.append('upload', file);
            formData.append("_token", _token);
            formData.append("masanpham", masanpham);
            var url = "{!! url('api/addImages_api') !!}";
            console.log(url);
            $.ajax({
                url:url,
                data:formData,
                type:'POST',
                processData: false,
                contentType: false,
                cache: false,
                success: function(data){
                    console.log(data);
                    var result = "<li>";
                    result += "<a href= "+data.image_url+" data-rel=\"colorbox\">";
                    result += "<img width=\"150\" height=\"150\" alt=\"150x150\" src="+data.thumpnail_url+" />";
                    result += "<div class=\"text\">";
                    result += "<div class=\"inner\">Sample Caption on Hover</div>";
                    result += "</div>";
                    result += "</a>";
                    result += "<div class=\"tools tools-bottom\">";
                    result += "<a href=\"#\">";
                    result += "<i class=\"ace-icon fa fa-times red\"></i>";
                    result += "</a>";
                    result +="</div>";
                    result +="</li>";
                    $( result ).insertBefore( "#add_images" );
                    iziToast.success({
                        title: 'Thông Báo',
                        message: 'Đã thêm thành công!',
                    });
                }
            })
        });

    </script>







    <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
    <![endif]-->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- page specific plugin scripts -->
    <script src="{{asset('assets/js/jquery.colorbox.min.js')}}"></script>

    <!-- ace scripts -->
    <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
    <script src="{{asset('assets/js/ace.min.js')}}"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            var $overflow = '';
            var colorbox_params = {
                rel: 'colorbox',
                reposition:true,
                scalePhotos:true,
                scrolling:false,
                previous:'<i class="ace-icon fa fa-arrow-left"></i>',
                next:'<i class="ace-icon fa fa-arrow-right"></i>',
                close:'&times;',
                current:'{current} of {total}',
                maxWidth:'100%',
                maxHeight:'100%',
                onOpen:function(){
                    $overflow = document.body.style.overflow;
                    document.body.style.overflow = 'hidden';
                },
                onClosed:function(){
                    document.body.style.overflow = $overflow;
                },
                onComplete:function(){
                    $.colorbox.resize();
                }
            };

            $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
            $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon


            $(document).one('ajaxloadstart.page', function(e) {
                $('#colorbox, #cboxOverlay').remove();
            });
        })
    </script>

@endsection
