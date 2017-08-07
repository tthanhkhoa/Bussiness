@extends('admin.header')

@section('sanpham')
    {{--<div class="row">--}}
    <div class="col-xs-12">

        <div class="table-header">
            Danh sách Sản phẩm
        </div>

        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>

                    <th>Mã sản phẩm </th>
                    <th>Tên sản phẩm </th>
                    <th class="hidden-480">Số lượng </th>

                    <th>Nhãn hiệu</th>
                    <th>Giá tiền</th>
                    <th class="hidden-480">Status</th>

                    <th></th>
                </tr>
                </thead>
                @foreach($sanpham as $item)
                <tbody>
                <tr>
                    <td>{{$item->maSanPham}}</td>
                    <td>{{$item->tenSanPham}}</td>
                    <td>{{$item->soLuong}}</td>
                    <td>{{$item->NhanHieu->tenNhanHieu}}</td>
                    <td>{{number_format($item->GiaTien)}}</td>
                    <td>{{$item->Active == 1 ? 'Yes' : 'No'}}</td>
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
                </tbody>
                @endforeach
            </table>
            <div class="pull-right" > {!! $sanpham->links() !!} </div>
        </div>
    </div>
    {{--</div>--}}
@endsection


@section('menusanpham')
    open
@endsection

@section('componentsanpham')
    open
@endsection