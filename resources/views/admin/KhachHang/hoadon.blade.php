@extends('admin.header')
@section('menukhachhang')
   open
@endsection
@section('hoadon')
    {{--<div class="row">--}}
    <div class="col-xs-12">

        <div class="table-header">
                Hoá Đơn
        </div>

        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>

                    <th>Mã hoá đơn </th>
                    <th>Tên khách hàng </th>
                    <th>Thời gian đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th >Số điện thoại</th>
                    <th >Tình Trạng</th>
                    <th></th>
                </tr>
                </thead>

                <tbody id="rowHoaDon">
                @foreach($dsHoaDon as $item)
                <tr>

                    <td id="mhd{{$item -> id}}">{{$item ->id}}</td>
                    <td id="mkh{{$item -> id}}">{{$item->KhachHang->tenkhachhang}}</td>
                    <td id="tg{{$item -> id}}">{{$item->ngaylap}}</td>
                    <td id="tt{{$item -> id}}">{{$item->tongtien}}</td>
                    <td id="sdt{{$item -> id}}">{{$item->Khachhang->sodienthoai}}</td>
                    <td id="ttr{{$item -> id}}">{{$item->status == 1 ? "Đã duyệt" : "Chưa duyệt"}}</td>

                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            <a class="blue" href="#">
                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                            </a>

                            <a class="green" href="#">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a class="red" href="#">
                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                            </a>
                        </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pull-right" > {!! $dsHoaDon->links() !!} </div>
        </div>
    </div>
    {{--</div>--}}
@endsection