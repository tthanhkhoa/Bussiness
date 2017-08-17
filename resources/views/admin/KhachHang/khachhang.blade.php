@extends('admin.header')
@section('menukhachhang')
    open
@endsection
@section('khachhang')
    {{--<div class="row">--}}
    <div class="col-xs-12">

        <div class="table-header">
            Danh sách Khách hàng
        </div>
        <a class="add blue" id="add" data-target="#AddModel" data-toggle="modal"  href="#" style="float: right;">
            <i class="ace-icon glyphicon glyphicon-plus"></i> Thêm thể loại
        </a>

        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>

                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                <th class="hidden-480">Ngày sinh </th>

                    <th>Địa chỉ</th>
                    <th>Số điện thoại </th>
                    <th>Email </th>


                    <th></th>
                </tr>
                </thead>

                <tbody id="rowKhachHang">
                @foreach($khachhang as $item)
                <tr id="{{$item->id}}">
                    <td id="mkh{{$item->id}}">{{isset($item->id) ? $item->id : ""}}</td>
                    <td id="tkh{{$item->id}}">{{isset($item->tenkhachhang) ? $item->tenkhachhang : "" }}</td>
                    <td id="ns{{$item->id}}">{{isset($item->ngaysinh) ? $item->ngaysinh : ""}}</td>
                    <td id="dc{{$item->id}}">{{isset($item->diachi) ? $item->diachi : ""}}</td>
                    <td id="sdt{{$item->id}}">{{isset($item->sodienthoai) ? $item->sodienthoai : ""}}</td>
                    <td id="mail{{$item->id}}">{{isset($item->email) ? $item->email : "" }}</td>

                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            <a class="green" href="#" id="edit{{$item->id}}" data-target="#AddModel" data-toggle="modal"
                               data-id="{{$item->id}}" data-tenkhachhang="{{$item->tenkhachhang}}" data-ngaysinh="{{$item->ngaysinh}}" data-diachi="{{$item->diachi}}"
                               data-sodienthoai="{{$item->sodienthoai}}" data-email="{{$item->email}}">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a class="red" id="delete" data-target="#confirm_delete"
                               data-toggle="modal" data-id="{{$item->id}}" href="#">
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
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" id="edit{{$item->id}}" data-target="#AddModel" data-toggle="modal"
                                           data-id="{{$item->id}}" data-tenkhachhang="{{$item->tenkhachhang}}" data-ngaysinh="{{$item->ngaysinh}}" data-diachi="{{$item->diachi}}"
                                           data-sodienthoai="{{$item->sodienthoai}}" data-email="{{$item->email}}">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" id="delete" data-target="#confirm_delete"
                                           data-toggle="modal" data-id="{{$item->id}}">
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
            <div class="pull-right" > {!! $khachhang->links() !!} </div>
        </div>
    </div>
    {{--</div>--}}

    <div class="modal fade ng-scope" id="AddModel" role="modal" style="display: none;" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">×</span></button>
                    <h4 class="modal-title">Thêm Khách Hàng</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <form id="registrationForm"  class="form-horizontal ng-pristine ng-valid">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Mã khách hàng</label>
                                    <div class="col-lg-10">
                                        <input id="makhachhang" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_MAKHACHHANG}}" placeholder="Mã khách hàng " ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên khách hàng</label>
                                    <div class="col-lg-10">
                                        <input id="tenkhachhang" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_TENKHACHHANG}}" placeholder="Tên khách hàng " ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Ngày sinh</label>
                                    <div class="col-lg-10">
                                        <input type="date" id="ngaysinh" name="{{App\Constant::CL_NGAYSINH}}" class="form-control ng-pristine ng-untouched ng-valid" data-date-inline-picker="true" />

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Địa chỉ</label>
                                    <div class="col-lg-10">
                                        <input id="diachi" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_DIACHI}}" placeholder="Địa chỉ" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Số điện thoại</label>
                                    <div class="col-lg-10">
                                        <input id="sodienthoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_SDT}}" placeholder="Số điện thoại" ng-model="currItem.major">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input id="email" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::CL_EMAIL}}" placeholder="Email" ng-model="currItem.major">
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button id="addSanpham" type="button "  class="btn btn-primary" >Save changes</button>
                                    <button id="editSanpham" type="button "   class="btn btn-primary" >Save changes</button>
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
                    <p>Bạn có chắc chắn muốn xoá khách hàng này???</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                    <a id="delete_" class="btn btn-danger btn-ok">Đồng ý!!</a>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $( "#add" ).click(function() {
            console.log("test");
            $(".modal-body").find("#makhachhang,#tenkhachhang,#ngaysinh,#diachi,#sodienthoai,#email").val('').end();
            $('#addSanpham').show();
            $('#editSanpham').hide();
        });

        $('#addSanpham').click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var makhachhang = $('#makhachhang').val();
            var tenkhachhang = $('#tenkhachhang').val();
            var ngaysinh = $('#ngaysinh').val();
            var diachi = $('#diachi').val();
            var sodienthoai = $('#sodienthoai').val();
            var email = $('#email').val();

            var url = "{!! route('addkhachhang_api') !!}";


            $.ajax({
                'url':url,
                'data':{
                    '_token': _token,
                    'tenkhachhang': tenkhachhang,
                    'ngaysinh': ngaysinh,
                    'diachi': diachi,
                    'sodienthoai': sodienthoai,
                    'email': email
                },
                'type':'POST',
                success: function(data){
                    console.log(data);
//                    return
                    $('#AddModel').modal('hide');
                    if(data){

                        var result = "<tr id='" + data.result.id + "'>";
                        result += "<td id=\"mkh"+data.result.id+"\">"+data.result.id+"</td>";
                        result += "<td id=\"tkh"+data.result.id+"\">"+data.result.tenkhachhang+"</td>";
                        result += "<td id=\"ns"+data.result.id+"\">"+data.result.ngaysinh+"</td>";
                        result += "<td id=\"dc"+data.result.id+"\">"+data.result.diachi+"</td>";
                        result += "<td id=\"sdt"+data.result.id+"\">"+data.result.sodienthoai+"</td>";
                        result += "<td id=\"mail"+data.result.id+"\">"+data.result.email+"</td>";
                        result += " <td>";
                        result += "<div class=\"hidden-sm hidden-xs action-buttons\">";
                        result += "<a class=\"green\" href=\"#\" id=\"edit"+data.result.id+"\" data-target=\"#AddModel\" data-toggle=\"modal\"" +
                            " data-id="+data.result.id+" data-tenkhachhang='"+data.result.tenkhachhang+"' data-ngaysinh="+data.result.ngaysinh+" data-diachi='"+data.result.diachi+"' " +
                            " data-sodienthoai="+data.result.sodienthoai+" data-email="+data.result.email+" >";

                        result += "<i class=\"ace-icon fa fa-pencil bigger-130\"></i>";
                        result += " </a>";
                        result += "<a class=\"red\" id=\"delete\" data-target=\"#confirm_delete\"" +
                            "data-toggle=\"modal\" data-id="+data.result.id+" href=\"#\">";
                        result += "<i class=\"ace-icon fa fa-trash-o bigger-130\"></i>";
                        result += "</a>";
                        result += " </div>";
                        result += "<div class=\"hidden-md hidden-lg\">";
                        result += "<div class=\"inline pos-rel\">";
                        result += "<button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\" data-position=\"auto\">";
                        result += " <i class=\"ace-icon fa fa-caret-down icon-only bigger-120\"></i>";
                        result += "</button>";
                        result += "<ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close\">";
                        result += "<li>";
                        result += "<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\" id=\"edit"+data.result.id+"\" data-target=\"#AddModel\" data-toggle=\"modal\"" +
                            " data-id="+data.result.id+" data-tenkhachhang='"+data.result.tenkhachhang+"' data-ngaysinh="+data.result.ngaysinh+" data-diachi='"+data.result.diachi+"' " +
                            " data-sodienthoai="+data.result.sodienthoai+" data-email="+data.result.email+" >";
                        result += "<span class=\"green\">";
                        result += "<i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>";
                        result += "</span>";
                        result += "</a>";
                        result += "</li>";
                        result += "<li>";
                        result += "<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\" id=\"delete\" data-target=\"#confirm_delete\"" +
                            "data-toggle=\"modal\" data-id="+data.result.id+">";
                        result += "<span class=\"red\">";
                        result += "<i class=\"ace-icon fa fa-trash-o bigger-120\"></i>";
                        result += "</span>";
                        result += "</a>";
                        result += "</li>";
                        result += "</ul>";
                        result += "</div>";
                        result += "</div>";
                        result += "</td>";
                        result += "</tr>";

                        $("#rowKhachHang").prepend(result);
                    }
                }
            })
        });



    </script>

@endsection