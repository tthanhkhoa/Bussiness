@extends('admin.header')

@section('theloai')
{{--<div class="row">--}}
    <div class="col-xs-12">

        <div class="table-header">
            Danh sách thể loại
        </div>
        <a class="add_theloai blue" id="add_theloai" data-target="#AddModel" data-toggle="modal"  href="#" style="float: right;">
            <i class="ace-icon glyphicon glyphicon-plus"></i> Thêm thể loại
        </a>
        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                {!! csrf_field() !!}
                <thead>
                <tr>

                    <th>Mã thể loại</th>
                    <th>Tên thể loại</th>

                    <th class="hidden-480">Active</th>

              <th></th>
                </tr>
                </thead>

                @foreach($TheLoai as $item)
                <tbody id="rowTheLoai" align="center">
                <tr id="{{$item->maTheLoai}}">


                    <td>{{$item->maTheLoai}}</td>
                    <td>{{$item->TenTheLoai}}</td>
                    <td class="hidden-480">{{$item->Active == 1 ?"YES" : "NO"}}</td>

                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">


                            <a class="edit_theloai green" id="edit_theloai" data-target="#AddModel" data-toggle="modal"
                               data-id="{{$item->maTheLoai}}" data-tenTheLoai="{{$item->TenTheLoai}}" data-active="{{$item->Active}}" href="#">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a class="delete_theloai red" id="delete_theloai" data-target="#confirm_delete" data-toggle="modal" data-id="{{$item->maTheLoai}}"  href="#">
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
                                        <a href="#" class="edit_theloai tooltip-success" data-rel="tooltip" title="Edit"
                                           id="edit_theloai" data-target="#AddModel" data-toggle="modal"
                                           data-id="{{$item->maTheLoai}}" data-tenTheLoai="{{$item->TenTheLoai}}" data-active="{{$item->Active}}">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" id="delete_theloai" class="delete_theloai tooltip-error" data-rel="tooltip"
                                           data-target="#confirm_delete" data-toggle="modal" data-id="{{$item->maTheLoai}}" title="Delete">
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
            <div class="pull-right" > {!! $TheLoai->links() !!} </div>
        </div>
    </div>
{{--</div>--}}

    <div class="modal fade ng-scope" id="AddModel" role="modal" style="display: none;" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">×</span></button>
                    <h4 class="modal-title">Thêm Thể Loại</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <form id="registrationForm"  class="form-horizontal ng-pristine ng-valid">
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Mã Thể Loại</label>
                                    <div class="col-lg-10">
                                        <input id="maTheLoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::TBL_MaTheLoai}}" placeholder="Mã thể loại" ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên Thể Loại</label>
                                    <div class="col-lg-10">
                                        <input id="tenTheLoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="{{App\Constant::TBL_tenTheLoai}}" placeholder="Tên thể loại" ng-model="currItem.major">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Active</label>
                                    <div class="col-lg-10">
                                        <input id="Active" type="radio" name="{{App\Constant::TBL_Active}}" value="1"> Yes<br>
                                        <input id="Active" type="radio" name="{{App\Constant::TBL_Active}}" value="0"> No<br>
                                    </div>
                                </div>



                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button id="add-theloai" type="button" class="btn btn-primary" >Save changes</button>
                                    <button id="edit-theloai" type="submit" class="btn btn-primary" >Save changes</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div></div></div>
    </div>
{{--Model confirm--}}

    <div class="modal fade" id="confirm_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <input type="hidden" name="row_id_del" id="row_id_del" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Xác nhận xoá  </h4>
                </div>

                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xoá Thể loại này???</p>
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
    {{--Model event--}}
    $( ".add_theloai" ).click(function() {
        $('#add-theloai').show();
        $('#edit-theloai').hide();
    });
    $( ".edit_theloai" ).click(function() {
        $('#edit-theloai').show();
        $('#add-theloai').hide();
    });


    $('tbody#rowTheLoai').on('click','.edit_theloai',function(){
        var maTheLoai = $(this).data('id');
        var tenTheLoai = $(this).data('tentheloai');
        var Active = $(this).data('active');
        console.log(Active);
        if(Active == 1){
                var $radios = $('input:radio[name=Active]');
                    $radios.filter('[value=1]').prop('checked', true);

        }
        else{
            var $radios = $('input:radio[name=Active]');
                $radios.filter('[value=0]').prop('checked', true);
        }
        //$("#Active").prop("checked", true)

        console.log(tenTheLoai + Active);
        var modal = $('#AddModel');
        modal.find("#maTheLoai").val(maTheLoai);
        modal.find("#tenTheLoai").val(tenTheLoai);

//        modal.find("#Active").val(Active);
    });

    $('tbody#rowTheLoai').on('click','.delete_theloai',function(){
        var maTheLoai = $(this).data('id');
        $("#row_id_del").val( maTheLoai );
        // $(".modal-body #bookId").val( myBookId );
    });


    $('#delete_').click(function(e){
        var _token = $("input[name='_token']").val();
        var maTheLoai = $('#row_id_del').val();
        console.log(maTheLoai);
        $.ajax({
            'url':'deletetheloai',
            'data':{
                '_token': _token,
                'maTheLoai': maTheLoai
            },
            'type':'POST',
            success: function(data){
                $('#confirm_delete').modal('hide');
                if(data.result == 1){
                    $("#" + maTheLoai).remove();
                }
                else{

                }


            }
        })
    });

//    $('tbody#rowTheLoai').on('click','.delete_theloai',function(event){
//        $('#confirm_delete').modal('toggle', $(this));
////        $('#confirm_delete').modal('show');
//    });
//    $('#confirm_delete').on('show.bs.modal', function (event) {
//        var link = event.relatedTarget;
//        console.log(link);
//        console.log(1);
//    });


//    $('#confirm_delete').on('shown.bs.modal', function () {
//        alert('show event fired!');
//    });
//    $("#confirm_delete").modal('show');

    $('#add-theloai').click(function(e){
        e.preventDefault();
        var _token = $("input[name='_token']").val();
        var maTheLoai = $('#maTheLoai').val();
        var tenTheLoai = $('#tenTheLoai').val();
        var Active = $('#Active:checked').val();
        $.ajax({
            'url':'addtheloai',
            'data':{
                '_token': _token,
                'maTheLoai': maTheLoai,
                'tenTheLoai': tenTheLoai,
                'Active': Active
            },
            'type':'POST',
            success: function(data){

                if(data != null){
                    $('#AddModel').modal('hide');
                    var active;
                    if(data.result.Active == 1)
                        active = "Yes";
                    else
                        active = "No";

                    var result = "<tr id='" + data.result.id + "'>";
                    result += "<td>"+data.result.id+"</td>";
                    result += "<td>"+data.result.tenTheLoai+"</td>";
                    result += "<td>"+active+"</td>";
                    result += "<td>";
                    result += "<div class=\"hidden-sm hidden-xs action-buttons\">";
                    result += "<a class=\"edit_theloai green\" id=\"edit_theloai\" data-target=\"#AddModel\" data-toggle=\"modal\"\n" +
                        "                               data-id="+data.result.id+" data-tenTheLoai="+data.result.tenTheLoai+" data-active="+data.result.Active+" href=\"#\">";
                    result += "<i class=\"ace-icon fa fa-pencil bigger-130\"></i>";
                    result += "</a>";
                    result += "<a class=\"delete_theloai red\" id=\"delete_theloai\" data-target=\"#confirm_delete\" " +
                        "data-toggle=\"modal\" data-id="+data.result.id+" href=\"#\">";
                    result += "<i class=\"ace-icon fa fa-trash-o bigger-130\"></i>";
                    result += "</a>";
                    result += "</div>";
                    result += "<div class=\"hidden-md hidden-lg\">";
                    result += "<div class=\"inline pos-rel\">";
                    result += "<button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\" data-position=\"auto\">";
                    result += "<i class=\"ace-icon fa fa-caret-down icon-only bigger-120\"></i>";
                    result += "</button>";
                    result += "<ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close\">";
                    result += "<li>";
                    result += "<a href=\"#\" class=\"edit_theloai tooltip-success\" id=\"edit_theloai\" data-target=\"#AddModel\" data-toggle=\"modal\"\n" +
                        " data-rel=\"tooltip\" title=\"Edit\" data-id=\"+data.result.id+\" data-tenTheLoai=\"+data.result.tenTheLoai+\" data-active=\"+data.result.Active+\" >";
                    result += "<span class=\"green\">";
                    result += "<i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>";
                    result += "</span>";
                    result += "</a>";
                    result += "</li>";
                    result += "<li>";
                    result += "<a href=\"#\" class=\"delete_theloai tooltip-error\" data-rel=\"tooltip\" data-target=\"confirm_delete\" data-id=\"+data.result.id+\" data-toggle=\"modal\" title=\"Delete\">";
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
                    $("#rowTheLoai").prepend(result);
//                    $("tbody#rowTheLoai").appendChild(result);
                }else{
                    location.reload();
                }
            }
        })
    })


</script>

@endsection

@section('menusanpham')
    open
@endsection