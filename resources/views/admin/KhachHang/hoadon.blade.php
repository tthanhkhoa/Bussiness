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
        <a class="add_hoadon blue" id="add_hoadon" data-target="#AddModel" data-toggle="modal"  href="#" style="float: right;">
            <i class="ace-icon glyphicon glyphicon-plus"></i> Thêm hóa đơn
        </a>
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
                    {{--<th >Số điện thoại</th>--}}
                    <th >Tình Trạng</th>
                    <th></th>
                </tr>
                </thead>

                <tbody id="rownhd">
                @foreach($dsHoaDon as $item)
                <tr id="{{$item->id}}">

                    <td id="mhd{{$item -> id}}">{{$item ->id}}</td>
                    <td id="mkh{{$item -> id}}">{{$item->KhachHang->tenkhachhang}}</td>
                    <td id="tg{{$item -> id}}">{{$item->ngaylap}}</td>
                    <td id="tt{{$item -> id}}">{{number_format($item->tongtien)}}</td>
                    {{--<td id="sdt{{$item -> id}}">{{$item->Khachhang->sodienthoai}}</td>--}}
                    <td id="ttr{{$item -> id}}">{{$item->status == 1 ? "Đã duyệt" : "Chưa duyệt"}}</td>

                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            @if($item->status == 1)
                                <a class="blue" href="{{url('chitiethoadon',['id'=> $item->id])}}" title="View">
                                    <i class="ace-icon glyphicon glyphicon-refresh"> </i>  Chi tiết đơn hàng
                                </a>
                            @else
                                <a class="red" href="{{url('chitiethoadon',['id'=> $item->id])}}" title="View">
                                    <i class="ace-icon glyphicon glyphicon-ok"> </i>  Duyệt đơn hàng
                                </a>
                            @endif
                        </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                        <a href="{{url('chitiethoadon')}}" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon glyphicon glyphicon-ok"></i>
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
    <div class="modal fade ng-scope" id="AddModel" role="modal" style="display: none;" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">×</span></button>
                    <h4 class="modal-title">Thêm Đơn Hàng</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <form id="registrationForm"  class="form-horizontal ng-pristine ng-valid">
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Mã hóa đơn</label>
                                    <div class="col-lg-10">
                                        <input id="mahoadon" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_MAHOADON}}" placeholder="Mã hóa đơn" ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên khách hàng</label>
                                    <div class="col-lg-10">
                                        <select class="form-control ng-pristine ng-untouched ng-valid" id="makhachhang" name="{{App\Constant::CL_MAKHACHHANG}}">
                                            <option selected="selected">-------------------------Chọn Khách Hàng-------------------------</option>
                                            @foreach($dsKhachHang as $item)
                                            <option value="{{$item->id}}">{{$item->tenkhachhang}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Ngày lập</label>
                                    <div class="col-lg-10">
                                        <input type="date" id="ngaylap" placeholder="Ngày lập" name="{{App\Constant::CL_NGAYLAP}}" class="form-control ng-pristine ng-untouched ng-valid" data-date-inline-picker="true" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tổng Tiền</label>
                                    <div class="col-lg-10">
                                        <input id="tongtien" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_SDT}}" placeholder="Tổng Tiền" ng-model="currItem.major">
                                    </div>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-lg-2 control-label">Số điện thoại</label>--}}
                                    {{--<div class="col-lg-10">--}}
                                        {{--<input id="sodienthoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_SDT}}" placeholder="Số điện thoại" ng-model="currItem.major">--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Status</label>
                                    <div class="col-lg-10">
                                        <input id="Active" type="radio" name="{{App\Constant::CL_ACTIVE}}" value="1"> Đánh dấu đã duyệt<br>
                                        <input id="Active" type="radio" name="{{App\Constant::CL_ACTIVE}}" value="0"> Đánh dấu chưa duyệt<br>
                                    </div>
                                </div>



                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button id="add_" type="button "  class="btn btn-primary" >Save changes</button>
                                    <button id="edit" type="button "   class="edit btn btn-primary" >Save changes</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div></div></div>
    </div>
    <div class="modal fade" id="confirm_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <input type="hidden" name="row_id_del" id="row_id_del" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Xác nhận xoá  </h4>
                </div>

                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xoá nhãn hiệu này???</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                    <a id="delete_" class="btn btn-danger btn-ok">Đồng ý!!</a>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $( "#add_hoadon" ).click(function() {
            $(".modal-body").find("#mahoadon,#ngaylap,#tongtien,#sodienthoai").val('').end();
            var $radios = $('input:radio[name=active]');
            $radios.filter('[value=1]').prop('checked', false);
            $radios.filter('[value=0]').prop('checked', false);
            $('#add_').show();
            $('#edit').hide();
        });

        $('#add_').click(function(e){
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var mahoadon = $('#mahoadon').val();
            var makhachhang = $('#makhachhang').val();
            var ngaylap = $('#ngaylap').val();
            var tongtien = $('#tongtien').val();
            var sodienthoai = $('#sodienthoai').val();
            var active = $('#Active:checked').val();
            var tenkhachhang = $("#makhachhang option:selected").html();
            var url= "api/addhoadon_api";
            $.ajax({
                'url':url,
                'data':{
                    '_token': _token,
                    'id': mahoadon,
                    'makhachhang': makhachhang,
                    'ngaylap':ngaylap,
                    'tongtien':tongtien,
                    'sodienthoai':sodienthoai,
                    'status': active
                },
                'type':'POST',
                success: function(data){

                    $('#AddModel').modal('hide');
                    console.log(data);
//                    return
                    if(data.result != 0){

                        var active;
                        if(data.result.active == 1)
                            active = "Đã duyệt";
                        else
                            active = "Chưa duyệt";

                        var result = "<tr id='" + data.result.id + "'>";
                        result +="<td id=\"mhd"+data.result.id+"\">"+data.result.id+"</td>";
                        result +="<td id=\"mkh"+data.result.id+"\">"+tenkhachhang+"</td>";
                        result +="<td id=\"tg"+data.result.id+"\">"+data.result.ngaylap+"</td>";
                        result +="<td id=\"tt"+data.result.id+"\">"+data.result.tongtien+"</td>";
//                        result +="<td id=\"sdt"+data.result.id+"\">"+data.result.sodienthoai+"</td>";
                        result +="<td id=\"ttr"+data.result.id+"\">"+active+"</td>";
                        result +="<td>";
                        result +="<div class=\"hidden-sm hidden-xs action-buttons\">";
                        result +="<a class=\"blue\" href=\"#\" title=\"View\">";
                        result +="<i class=\"ace-icon fa fa-search-plus bigger-130\"></i>";
                        result +=" </a>";
                        result +="<a class=\"edit_data green\" id=\"edit"+data.result.id+"\" data-target=\"#AddModel\" data-toggle=\"modal\" "+
                            " data-id="+data.result.id+" data-makhachhang="+data.result.makhachhang+" data-ngaylap="+data.result.ngaylap+" data-tongtien="+data.result.tongtien+" " +
                            " data-sodienthoai="+data.result.sodienthoai+" data-active="+data.result.active+" href=\"#\">";
                        result +="<i class=\"ace-icon fa fa-pencil bigger-130\"></i>";
                        result +=" </a>";
                        result +="<a class=\"delete_data red\" data-target=\"#confirm_delete\" data-id="+data.result.id+" data-toggle=\"modal\" href=\"#\">";
                        result +="<i class=\"ace-icon fa fa-trash-o bigger-130\"></i>";
                        result +="</a>";
                        result +="</div>";
                        result +="<div class=\"hidden-md hidden-lg\">";
                        result +="<div class=\"inline pos-rel\">";
                        result +="<button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\" data-position=\"auto\">";
                        result +="<i class=\"ace-icon fa fa-caret-down icon-only bigger-120\"></i>";
                        result +="</button>";
                        result +="<ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close\">";
                        result +="<li>";
                        result +="<a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">";
                        result +="<span class=\"blue\">";
                        result +="<i class=\"ace-icon fa fa-search-plus bigger-120\"></i>";
                        result +="</span>";
                        result +="</a>";
                        result +="</li>";
                        result +="<li>";
                        result +="<a href=\"#\" class=\"edit_data tooltip-success\" data-rel=\"tooltip\" title=\"Edit\" id=\"edit"+data.result.id+"\" data-target=\"#AddModel\" data-toggle=\"modal\" "+
                            " data-id="+data.result.id+" data-makhachhang="+data.result.makhachhang+" data-ngaylap="+data.result.ngaylap+" data-tongtien="+data.result.tongtien+" " +
                            " data-sodienthoai="+data.result.sodienthoai+" data-active="+data.result.active+">";
                        result +="<span class=\"green\">";
                        result +="<i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>";
                        result +="</span>";
                        result +="</a>";
                        result +="</li>";
                        result +="<li>";
                        result +="<a href=\"#\" class=\"delete_data tooltip-error\" data-rel=\"tooltip\" title=\"Delete\" data-target=\"#confirm_delete\" data-id="+data.result.id+" data-toggle=\"modal\">";
                        result +="<span class=\"red\">";
                        result +="<i class=\"ace-icon fa fa-trash-o bigger-120\"></i>";
                        result +="</span>";
                        result +="</a>";
                        result +="</li>";
                        result +="</ul>";
                        result +="</div>";
                        result +="</div>";
                        result +="</td>";
                        result +="</tr>";

                        $("#rownhd").prepend(result);
//                    $('#add_').hide();
//                    $('#edit_').hide();
//                    $("tbody#rowTheLoai").appendChild(result);
                        iziToast.success({
                            title: 'Thông Báo',
                            message: 'Đã thêm thành công!',
                        });
                    }else{
                        iziToast.error({
                            title: 'Thông báo',
                            message: 'Trong quá trình thêm đã xuất hiện lỗi.',
                        });
                    }
                }
            })
        })

    </script>


@endsection