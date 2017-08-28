@extends('admin.header')
@section('menukhachhang')
    open
@endsection
@section('chitiethoadon')

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="space-6"></div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-large">
                            <h3 class="widget-title grey lighter">
                                <i class="ace-icon fa fa-leaf green"></i>
                                Chi tiết hóa đơn
                            </h3>

                            <div class="widget-toolbar no-border invoice-info">
                                <span class="invoice-info-label">Invoice:</span>
                                <span class="red">#121212</span>

                                <br />
                                <span class="invoice-info-label">Date:</span>
                                <span class="blue">04/04/2014</span>
                            </div>

                            <div class="widget-toolbar hidden-480">
                                <a href="#">
                                    <i class="ace-icon fa fa-print"></i>
                                </a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-24">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
                                                <b>Thông tin khách hàng</b>
                                            </div>
                                        </div>

                                        <div>
                                            <ul class="list-unstyled spaced">
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>Họ tên :
                                                    <b>{{isset($dsKhachHang) ? $dsKhachHang->tenkhachhang : ""}}</b>
                                                </li>

                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>Địa chỉ :
                                                    <b> {{isset($dsKhachHang) ? $dsKhachHang->diachi : ""}} </b>
                                                </li>

                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>Số điện thoại :
                                                    <b>{{isset($dsKhachHang) ? $dsKhachHang->sodienthoai : ""}}</b>
                                                </li>

                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>
                                                    Email :
                                                    <b class="red">{{isset($dsKhachHang) ? $dsKhachHang-> email: ""}}</b>
                                                </li>

                                                <li class="divider"></li>

                                                {{--<li>--}}
                                                    {{--<i class="ace-icon fa fa-caret-right blue"></i>--}}
                                                    {{--Paymant Info--}}
                                                {{--</li>--}}
                                            </ul>
                                        </div>
                                    </div><!-- /.col -->

                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                                <b>Thông tin hóa đơn</b>
                                            </div>
                                        </div>

                                        <div>
                                            <ul class="list-unstyled  spaced">
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right green"></i>Mã hóa đơn :
                                                    <b>{{isset($dsHoaDon) ? $dsHoaDon->id : ""}}</b>
                                                </li>

                                                <li>
                                                    <i class="ace-icon fa fa-caret-right green"></i>Ngày Lập :
                                                    <b>{{isset($dsHoaDon) ? $dsHoaDon->created_at : ""}}</b>
                                                </li>

                                            </ul>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="space"></div>

                                <div>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Sản phẩm</th>
                                            <th class="hidden-xs">Số lượng</th>
                                            <th class="hidden-480">Đơn giá</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                            $i = 1;
                                        ?>
                                        {{--@foreach($dsHoaDon as $item)--}}
                                        @foreach($dsHoaDon->ChiTietHD as $CTHD)
                                        <tr>
                                            <td class="center">{{$i}}</td>

                                            <td>
                                                {{$CTHD->SanPham->tensanpham}}
                                            </td>
                                            <td class="hidden-xs">
                                                {{$CTHD->soluong}}
                                            </td>
                                            <td class="hidden-480">{{number_format($CTHD->SanPham->giatien)}}</td>
                                            <td>{{number_format($CTHD->soluong * $CTHD->SanPham->giatien)}}</td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                        {{--@endforeach--}}
                                        </tbody>
                                    </table>
                                </div>

                                <div class="hr hr8 hr-double hr-dotted"></div>

                                <div class="row">
                                    <div class="col-sm-5 pull-right">
                                        <h4 class="pull-right">
                                            Tổng tiền :
                                            <span class="red">{{number_format($dsHoaDon->tongtien)}}</span>
                                        </h4>
                                    </div>
                                    <div class="col-sm-7 pull-left"> Summary </div>
                                </div>

                                <div class="space-6">

                                </div>
                                <div class="well">

                                </div>

                                <div class="row">
                                    <div class="col-sm-7 pull-right">
                                        <p>
                                            <a href="#"><button type="button" class="btn btn-white btn-primary no-border">Sửa đơn hàng</button></a>
                                            <a href="{{route('deletehoadon',['id'=>isset($dsHoaDon) ? $dsHoaDon->id : ""])}}"><button type="button" class="btn btn-white btn-warning no-border">Hủy đơn hàng</button></a>


                                            @if($dsHoaDon->status == 1)
                                            @else
                                                <button class="btn btn-lg btn-success no-border">
                                                    <i class="ace-icon fa fa-check"></i> Duyệt đơn hàng

                                                </button>

                                            @endif

                                        </p>


                                    </div>
                                    <div class="col-sm-7 pull-left"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->





@endsection