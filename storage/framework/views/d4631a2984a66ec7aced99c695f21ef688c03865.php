<?php $__env->startSection('theloai'); ?>

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
                <?php echo csrf_field(); ?>

                <thead>
                <tr>

                    <th>Mã thể loại</th>
                    <th>Tên thể loại</th>

                    <th class="hidden-480">Active</th>

              <th></th>
                </tr>
                </thead>


                <tbody id="rowTheLoai">
                <?php $__currentLoopData = $TheLoai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="<?php echo e($item->id); ?>">


                    <td id="td_mtl<?php echo e($item->id); ?>"><?php echo e($item->id); ?></td>
                    <td id="td_ttl<?php echo e($item->id); ?>"><?php echo e($item->tentheloai); ?></td>
                    <td id="td_at<?php echo e($item->id); ?>" class="hidden-480"><?php echo e($item->active == 1 ?"YES" : "NO"); ?></td>

                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">


                            <a class="edit_theloai green" id="edit_theloai<?php echo e($item->id); ?>" data-target="#AddModel" data-toggle="modal"
                               data-id="<?php echo e($item->id); ?>" data-tenTheLoai="<?php echo e($item->tentheloai); ?>" data-active="<?php echo e($item->active); ?>" href="#">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a class="delete_theloai red" id="delete_theloai" data-target="#confirm_delete" data-toggle="modal" data-id="<?php echo e($item->id); ?>"  href="#">
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
                                           id="edit_theloai<?php echo e($item->id); ?>" data-target="#AddModel" data-toggle="modal"
                                           data-id="<?php echo e($item->id); ?>" data-tenTheLoai="<?php echo e($item->tentheloai); ?>" data-active="<?php echo e($item->active); ?>">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" id="delete_theloai" class="delete_theloai tooltip-error" data-rel="tooltip"
                                           data-target="#confirm_delete" data-toggle="modal" data-id="<?php echo e($item->id); ?>" title="Delete">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
            <div class="pull-right" > <?php echo $TheLoai->links(); ?> </div>
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
                                    <label class="col-lg-2 control-label">Mã Thể Loại</label>
                                    <div class="col-lg-10">
                                        <input id="maTheLoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_MATHELOAI); ?>" placeholder="Mã thể loại" ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên Thể Loại</label>
                                    <div class="col-lg-10">
                                        <input id="tenTheLoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_TENTHELOAI); ?>" placeholder="Tên thể loại" ng-model="currItem.major">
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
    
    $( "#add_theloai" ).click(function() {
        $(".modal-body").find("#maTheLoai,#tenTheLoai").val('').end();
        var $radios = $('input:radio[name=Active]');
        $radios.filter('[value=1]').prop('checked', false);
        $radios.filter('[value=0]').prop('checked', false);
        $('#add_').show();
        $('#edit').hide();
    });



    $('tbody#rowTheLoai').on('click','.edit_theloai',function(){
        $('#edit').show();
        $('#add_').hide();
        var maTheLoai = $(this).data('id');
        var tenTheLoai = $(this).data('tentheloai');
        var Active = $(this).data('active');
        if(Active == 1){
                var $radios = $('input:radio[name=active]');
                    $radios.filter('[value=1]').prop('checked', true);

        }
        else{
            var $radios = $('input:radio[name=active]');
                $radios.filter('[value=0]').prop('checked', true);
        }
        console.log(tenTheLoai + Active);
        var modal = $('#AddModel');
        modal.find("#maTheLoai").val(maTheLoai);
        modal.find("#tenTheLoai").val(tenTheLoai);
    });

    $('tbody#rowTheLoai').on('click','.delete_theloai',function(){
        var maTheLoai = $(this).data('id');
        $("#row_id_del").val( maTheLoai );
    });


    $('#delete_').click(function(e){
        var _token = $("input[name='_token']").val();
        var matheloai = $('#row_id_del').val();
        console.log(matheloai);
        $.ajax({
            'url':'deletetheloai',
            'data':{
                '_token': _token,
                'id': matheloai
            },
            'type':'POST',
            success: function(data){
                $('#confirm_delete').modal('hide');
                if(data.result == 1){
                    $("#" +matheloai).remove();
                }
                else{

                }


            }
        })
    });



    $('.edit').click(function(e){
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        var matheloai = $('#maTheLoai').val();
        var tentheloai = $('#tenTheLoai').val();
        var active = $('#Active:checked').val();
        $.ajax({
            'url':'updatetheloai',
            'data':{
                '_token': _token,
                'id': matheloai,
                'tentheloai': tentheloai,
                'active': active
            },
            'type':'POST',
            success: function(data){
                $('#AddModel').modal('hide');
                if(data != null){
                    $('#td_ttl' + matheloai).html(tentheloai);
                    if(active == 1){
                        $('#td_at' + matheloai).html("YES");
                    }
                    else{
                        $('#td_at' + matheloai).html("NO");
                    }
                    var id_edit = 'edit_theloai' + matheloai;
                    var temp = document.getElementById(id_edit);
                //    temp.setAttribute("data-id", "EnSureModal");
                    temp.setAttribute("data-tentheloai", tentheloai);
                    temp.setAttribute("data-active", active);
                    var content = temp.outerHTML;
                    temp.outerHTML = content;

                }
                else{

                }


            }
        })
    });



    $('#add_').click(function(e){
        e.preventDefault();
        var _token = $("input[name='_token']").val();
        var matheloai = $('#maTheLoai').val();
        var tentheloai = $('#tenTheLoai').val();
        var active = $('#Active:checked').val();
        $.ajax({
            'url':'addtheloai',
            'data':{
                '_token': _token,
                'matheloai': matheloai,
                'tentheloai': tentheloai,
                'active': active
            },
            'type':'POST',
            success: function(data){

                if(data != null){
//                    console.log(data);
                    $('#AddModel').modal('hide');
                    var active;
                    if(data.result.active == 1)
                        active = "Yes";
                    else
                        active = "No";

                    var result = "<tr id='" + data.result.id + "'>";
                    result += "<td id=\"td_mtl"+data.result.id+"\">"+data.result.id+"</td>";
                    result += "<td id= \"td_ttl"+data.result.id+"\">"+data.result.tentheloai+"</td>";
                    result += "<td id= \"td_at"+data.result.id+"\">"+active+"</td>";
                    result += "<td>";
                    result += "<div class=\"hidden-sm hidden-xs action-buttons\">";
                    result += "<a class='"+"edit_theloai green"+"' id=\"edit_theloai"+data.result.id+"\" data-target=\"#AddModel\" data-toggle=\"modal\"\n" +
                        "                               data-id="+data.result.id+" data-tenTheLoai='" +data.result.tentheloai+ "' data-active="+data.result.active+" href=\"#\">";
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
                    result += "<a href=\"#\" class='"+"edit_theloai tooltip-success"+"' id=\"edit_theloai"+data.result.id+"\" data-target=\"#AddModel\" data-toggle=\"modal\"\n" +
                        " data-rel=\"tooltip\" title=\"Edit\" data-id="+data.result.id+" data-tenTheLoai="+data.result.tentheloai+" data-active="+data.result.active+" >";
                    result += "<span class=\"green\">";
                    result += "<i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>";
                    result += "</span>";
                    result += "</a>";
                    result += "</li>";
                    result += "<li>";
                    result += "<a href=\"#\" class=\"delete_theloai tooltip-error\" data-rel=\"tooltip\" data-target=\"confirm_delete\" data-id="+data.result.id+" data-toggle=\"modal\" title=\"Delete\">";
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
//                    $('#add_').hide();
//                    $('#edit_').hide();
//                    $("tbody#rowTheLoai").appendChild(result);
                }else{
                    location.reload();
                }
            }
        })
    })


</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menusanpham'); ?>
    open
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>