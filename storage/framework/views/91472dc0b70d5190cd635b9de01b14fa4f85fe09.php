<?php $__env->startSection('menusanpham'); ?>
    open
<?php $__env->stopSection(); ?>
<?php $__env->startSection('nhacungcap'); ?>
    
    <div class="col-xs-12">

        <div class="table-header">
            Danh sách Nhà cung cấp
        </div>
        <a class="add_sanpham blue" id="add_ncc" data-target="#AddModel" data-toggle="modal"  href="#" style="float: right;">
            <i class="ace-icon glyphicon glyphicon-plus"></i> Thêm Nhà Cung Cấp
        </a>

        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>

                    <th>Mã nhà cung cấp</th>
                    <th>Tên nhà cung cấp </th>
                    <th class="hidden-480">Địa chỉ</th>
                    <th class="hidden-480">Số điện thoại</th>
                    <th class="hidden-480">Active</th>
                    <th></th>
                </tr>
                </thead>

                <tbody id="rowncc">
                <?php $__currentLoopData = $ncc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="<?php echo e($item->id); ?>">
                    <td id="<?php echo e($item->id); ?>"><?php echo e($item->id); ?></td>
                    <td id="tnh<?php echo e($item->id); ?>"><?php echo e($item->tennhanhieu); ?></td>
                    <td id="dc<?php echo e($item->id); ?>"><?php echo e($item->diachi); ?></td>
                    <td id="sdt<?php echo e($item->id); ?>"><?php echo e($item->sodienthoai); ?></td>
                    <td id="at<?php echo e($item->id); ?>"><?php echo e($item->active == 1 ? 'YES': 'NO'); ?></td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            <a class="edit_ncc green" id="edit<?php echo e($item->id); ?>" data-target="#AddModel" data-toggle="modal"
                               data-id="<?php echo e($item->id); ?>" data-tennhanhieu="<?php echo e($item->tennhanhieu); ?>" data-diachi="<?php echo e($item->diachi); ?>" data-sodienthoai="<?php echo e($item->sodienthoai); ?>"
                               data-active="<?php echo e($item->active); ?>" href="#">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a class="delete_ncc red" data-target="#confirm_delete" data-id="<?php echo e($item->id); ?>" data-toggle="modal" href="#">
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
                                        <a href="#" class="tooltip-success" id="edit<?php echo e($item->id); ?>" data-target="#AddModel" data-toggle="modal"
                                           data-id="<?php echo e($item->id); ?>" data-tennhanhieu="<?php echo e($item->tennhanhieu); ?>" data-diachi="<?php echo e($item->diachi); ?>"
                                           data-sodienthoai="<?php echo e($item->sodienthoai); ?>"
                                           data-active="<?php echo e($item->active); ?>"
                                           data-rel="tooltip" title="Edit">
                                            <span class="green">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="delete_ncc tooltip-error" data-target="#confirm_delete" data-id="<?php echo e($item->id); ?>" data-toggle="modal"
                                           data-rel="tooltip" title="Delete">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="pull-right" > <?php echo $ncc->links(); ?> </div>
        </div>
    </div>
    
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
                                <?php echo csrf_field(); ?>


                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Mã Nhãn Hiệu</label>
                                    <div class="col-lg-10">
                                        <input id="manhanhieu" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_MANHANHIEU); ?>" placeholder="Mã Nhãn Hiệu" ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên Nhãn Hiệu</label>
                                    <div class="col-lg-10">
                                        <input id="tennhanhieu" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_TENNHANHIEU); ?>" placeholder="Tên Nhãn Hiệu" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Địa chỉ</label>
                                    <div class="col-lg-10">
                                        <input id="diachi" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_DIACHI); ?>" placeholder="Địa chỉ" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Số điện thoại</label>
                                    <div class="col-lg-10">
                                        <input id="sodienthoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_SDT); ?>" placeholder="Số điện thoại" ng-model="currItem.major">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Active</label>
                                    <div class="col-lg-10">
                                        <input id="Active" type="radio" name="<?php echo e(App\Constant::CL_ACTIVE); ?>" value="1"> Yes<br>
                                        <input id="Active" type="radio" name="<?php echo e(App\Constant::CL_ACTIVE); ?>" value="0"> No<br>
                                    </div>
                                </div>



                                
                                
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

    $( "#add_ncc" ).click(function() {
        $(".modal-body").find("#manhanhieu,#tennhanhieu,#diachi,#sodienthoai").val('').end();
        var $radios = $('input:radio[name=active]');
        $radios.filter('[value=1]').prop('checked', false);
        $radios.filter('[value=0]').prop('checked', false);
        $('#add_').show();
        $('#edit').hide();
    });

    $('#add_').click(function(e){
        e.preventDefault();
        var _token = $("input[name='_token']").val();
        var manhanhieu = $('#manhanhieu').val();
        var tennhanhieu = $('#tennhanhieu').val();
        var diachi = $('#diachi').val();
        var sodienthoai = $('#sodienthoai').val();
        var active = $('#Active:checked').val();
        var url= "api/addnhanhieu_api";
        $.ajax({
            'url':url,
            'data':{
                '_token': _token,
                'id': manhanhieu,
                'tennhanhieu': tennhanhieu,
                'diachi':diachi,
                'sodienthoai':sodienthoai,
                'active': active
            },
            'type':'POST',
            success: function(data){

                $('#AddModel').modal('hide');
                if(data.result != 1){

                    var active;
                    if(data.result.active == 1)
                        active = "Yes";
                    else
                        active = "No";

                    var result = "<tr id='" + data.result.id + "'>";
                    result +="<td id='" + data.result.id + "'>"+data.result.id+"</td>";
                    result +="<td id=\"tnh" + data.result.id + "\">"+data.result.tennhanhieu+"</td>";
                    result +="<td id=\"dc" + data.result.id + "\">"+data.result.diachi+"</td>";
                    result +="<td id=\"sdt" + data.result.id + "\">"+data.result.sodienthoai+"</td>";
                    result +="<td id=\"at" + data.result.id + "\">"+active+"</td>";
                    result +="<td>";
                    result +="<div class=\"hidden-sm hidden-xs action-buttons\">";
                    result +="<a class=\"edit_ncc green\" data-target=\"#AddModel\" id=\"edit"+data.result.id+"\" data-id='"+data.result.id+"' " +
                        "data-tennhanhieu='"+data.result.tennhanhieu+"' data-diachi='"+data.result.diachi+"' data-sodienthoai='"+data.result.sodienthoai+"' " +
                        "data-active='"+data.result.active+"' data-toggle=\"modal\" href=\"#\">";
                    result +="<i class=\"ace-icon fa fa-pencil bigger-130\"></i>";
                    result +="</a>";
                    result +="<a class=\"delete_ncc red\" data-id='"+data.result.id+"' data-target=\"#confirm_delete\" data-toggle=\"modal\" href=\"#\">";
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
                    result +="<a href=\"#\" class=\"edit_ncc tooltip-success\" data-target=\"#AddModel\" id=\"edit"+data.result.id+"\" data-toggle=\"modal\" data-rel=\"tooltip\"" +
                        " data-id='"+data.result.id+"' data-tennhanhieu='"+data.result.tennhanhieu+"' data-active='"+data.result.active+"' " +
                        "data-diachi='"+data.result.diachi+"'data-id='"+data.result.id+"' data-tennhanhieu='"+data.result.tennhanhieu+"' data-diachi='"+data.result.diachi+"' data-sodienthoai='"+data.result.sodienthoai+"' title=\"Edit\">";

                    result +="<span class=\"green\">";
                    result +=" <i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>";
                    result +="</span>";
                    result +="</a>";
                    result +="</li>";
                    result +="<li>";
                    result +="<a href=\"#\" class=\"delete_ncc tooltip-error\" data-id='"+data.result.id+"' data-target=\"#confirm_delete\" data-toggle=\"modal\" data-rel=\"tooltip\" title=\"Delete\">";
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
                    $("#rowncc").prepend(result);
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


    $('tbody#rowncc').on('click','.delete_ncc',function(){
        var id = $(this).data('id');
        $("#row_id_del").val( id);
    });


    $('#delete_').click(function(e){
        var _token = $("input[name='_token']").val();
        var id = $('#row_id_del').val();
        var url = 'api/deletenhanhieu_api';
        console.log(id);
        $.ajax({
            'url':url,
            'data':{
                '_token': _token,
                'id': id
            },
            'type':'POST',
            success: function(data){
                $('#confirm_delete').modal('hide');
                if(data.result == 1){
                    $("#" +id).remove();
                    iziToast.success({
                        title: 'Thông Báo',
                        message: 'Đã xoá thành công!',
                    });
                }
                else{
                    iziToast.error({
                        title: 'Thông báo',
                        message: 'Trong quá trình xóa đã xuất hiện lỗi.',
                    });
                }


            }
        })
    });



    $('tbody#rowncc').on('click','.edit_ncc',function(){
        $('#edit').show();
        $('#add_').hide();
        var manhanhieu = $(this).data('id');
        var tennhanhieu = $(this).data('tennhanhieu');
        var diachi = $(this).data('diachi');
        var sodienthoai = $(this).data('sodienthoai');
        var Active = $(this).data('active');
        if(Active == 1){
            var $radios = $('input:radio[name=active]');
            $radios.filter('[value=1]').prop('checked', true);

        }
        else{
            var $radios = $('input:radio[name=active]');
            $radios.filter('[value=0]').prop('checked', true);
        }
        var modal = $('#AddModel');
        modal.find("#manhanhieu").val(manhanhieu);
        modal.find("#tennhanhieu").val(tennhanhieu);
        modal.find("#diachi").val(diachi);
        modal.find("#sodienthoai").val(sodienthoai);
    });

    $('.edit').click(function(e){
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        var manhanhieu = $('#manhanhieu').val();
        var tennhanhieu = $('#tennhanhieu').val();
        var diachi = $('#diachi').val();
        var sodienthoai = $('#sodienthoai').val();
        var active = $('#Active:checked').val();
        var url= "api/editnhanhieu_api";


//        var _token = $("input[name='_token']").val();
//        var matheloai = $('#maTheLoai').val();
//        var tentheloai = $('#tenTheLoai').val();
//        var active = $('#Active:checked').val();
        $.ajax({
            'url':url,
            'data':{
                '_token': _token,
                'id': manhanhieu,
                'tennhanhieu': tennhanhieu,
                'diachi':diachi,
                'sodienthoai':sodienthoai,
                'active': active
            },
            'type':'POST',
            success: function(data){
                console.log(data);
                $('#AddModel').modal('hide');
                if(data.result != 1){
                    $('#tnh' + manhanhieu).html(data.result.tennhanhieu);
                    $('#dc' + manhanhieu).html(data.result.diachi);
                    $('#sdt' + manhanhieu).html(data.result.sodienthoai);
                    if(data.result.active == 1){
                        $('#at' + manhanhieu).html("YES");
                    }
                    else{
                        $('#at' + manhanhieu).html("NO");
                    }
                    var id_edit = 'edit' + manhanhieu;
                    var temp = document.getElementById(id_edit);
                    temp.setAttribute("data-tennhanhieu", tennhanhieu);
                    temp.setAttribute("data-diachi", diachi);
                    temp.setAttribute("data-sodienthoai", sodienthoai);
                    temp.setAttribute("data-active", active);
                    var content = temp.outerHTML;
                    temp.outerHTML = content;
                    iziToast.success({
                        title: 'Thông Báo',
                        message: 'Đã sửa thành công!',
                    });

                }
                else{
                    iziToast.error({
                        title: 'Thông báo',
                        message: 'Trong quá trình sửa đã xuất hiện lỗi.',
                    });
                }


            }
        })
    });




</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>