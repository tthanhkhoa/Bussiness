<?php $__env->startSection('sanpham'); ?>
    
    <div class="col-xs-12">

        <div class="table-header">
            Danh sách Sản phẩm
        </div>
        <a class="add_sanpham blue" id="add_sanpham" data-target="#AddModel" data-toggle="modal"  href="#" style="float: right;">
            <i class="ace-icon glyphicon glyphicon-plus"></i> Thêm thể loại
        </a>
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

                <tbody id="rowSanPham" >
                <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id=<?php echo e($item->id); ?>>
                    <td id='msp<?php echo e($item->id); ?>'><?php echo e($item->id); ?></td>
                    <td id='tsp<?php echo e($item->id); ?>'><?php echo e($item->tensanpham); ?></td>
                    <td id='sl<?php echo e($item->id); ?>'><?php echo e($item->soluong); ?></td>
                    <td id='nh<?php echo e($item->id); ?>'><?php echo e($item->NhanHieu->tennhanhieu); ?></td>
                    <td id='gt<?php echo e($item->id); ?>'><?php echo e(number_format($item->giatien)); ?></td>
                    <td id='at<?php echo e($item->id); ?>'><?php echo e($item->active == 1 ? 'Yes' : 'No'); ?></td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">


                            <a class="edit_sanpham green" id="edit<?php echo e($item->id); ?>" data-target="#AddModel" data-toggle="modal"
                               data-id="<?php echo e($item->id); ?>" data-tensanpham="<?php echo e($item->tensanpham); ?>" data-matheloai="<?php echo e($item->matheloai); ?>" data-soluong="<?php echo e($item->soluong); ?>"
                               data-manhanhieu="<?php echo e($item->manhanhieu); ?>" data-giatien="<?php echo e($item->giatien); ?>" data-active="<?php echo e($item->active); ?>" href="#">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a class="delete_sanpham red" id="delete" data-target="#confirm_delete" data-toggle="modal" data-id="<?php echo e($item->id); ?>" href="#">
                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                            </a>
                        </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle"   data-toggle=" dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">


                                    <li>
                                        <a href="#" class="tooltip-success" id="edit<?php echo e($item->id); ?>" data-target="#AddModel" data-toggle="modal"
                                           data-id="<?php echo e($item->id); ?>" data-tensanpham="<?php echo e($item->tensanpham); ?>" data-matheloai="<?php echo e($item->matheloai); ?>"
                                           data-soluong="<?php echo e($item->soluong); ?>"
                                           data-manhanhieu="<?php echo e($item->manhanhieu); ?>" data-giatien="<?php echo e($item->giatien); ?>" data-active="<?php echo e($item->active); ?>"
                                           data-rel="tooltip" title="Edit">
                                            <span class="green">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="delete_sanpham tooltip-error" id="delete" data-target="#confirm_delete"
                                           data-toggle="modal" data-id="<?php echo e($item->id); ?>"
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
            <div class="pull-right" > <?php echo $sanpham->links(); ?> </div>
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
                                    <label class="col-lg-2 control-label">Mã sản phẩm</label>
                                    <div class="col-lg-10">
                                        <input id="masanpham" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_MASANPHAM); ?>" placeholder="Mã sản phẩm " ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên sản phẩm</label>
                                    <div class="col-lg-10">
                                        <input id="tensanpham" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_TENSANPHAM); ?>" placeholder="Tên sản phẩm " ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Loại sản phẩm</label>
                                    <div class="col-lg-10">
                                        <select id="matheloai" class="form-control ng-pristine ng-untouched ng-valid"  name="<?php echo e(App\Constant::CL_MATHELOAI); ?>">
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Số lượng</label>
                                    <div class="col-lg-10">
                                        <input id="soluong" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_SOLUONG); ?>" placeholder="Số lượng" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nhãn hiệu</label>
                                    <div class="col-lg-10">
                                        <select class="form-control ng-pristine ng-untouched ng-valid" id="manhanhieu" name="<?php echo e(App\Constant::TBL_NHANHIEU); ?>">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Giá tiền</label>
                                    <div class="col-lg-10">
                                        <input id="giatien" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::CL_GIATIEN); ?>" placeholder="Giá tiền" ng-model="currItem.major">
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
                    <p>Bạn có chắc chắn muốn xoá sản phẩm này???</p>
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
        window.onload = function(){
            $("#sub_id_sanpham").empty();
            $.ajax({
                'url':'/api/danhsachtheloai_api',
                'type':'GET',
                success: function(data){

                    var result = "<li class=>";
                    result += "<a href=\"\\tatcasanpham\">";
                    result += "<i class=\"menu-icon fa fa-caret-right\"></i>";
                    result += "Tất cả";
                    result += "</a>";
                    result += "<b class=\"arrow\"></b>";
                    result += "</li>";
                    var t;
                    for(var key in data){
                        t = data[key];
                    }
                    t.forEach(function(entry) {
                        var codeTheLoai = entry.id;
                        var temp = '\\sanphamid\\'+codeTheLoai;
                        result += "<li class=>";
                        result += "<a href= "+temp+" >";
                        result += "<i class=\"menu-icon fa fa-caret-right\"></i>";
                        result += ""+entry.tentheloai+"";
                        result += "</a>";
                        result += "<b class=\"arrow\"></b>";
                        result += "</li>";

                    });
                    $("#sub_id_sanpham").append(result);
                    $("#flag").val(1);
                }
            })
        };


        $( "#add_sanpham" ).click(function() {
            $(".modal-body").find("#maTheLoai,#tenTheLoai").val('').end();
            var $radios = $('input:radio[name=Active]');
            $radios.filter('[value=1]').prop('checked', false);
            $radios.filter('[value=0]').prop('checked', false);
            getdata();
            $('#addSanpham').show();
            $('#editSanpham').hide();
        });


        $('#addSanpham').click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var masanpham = $('#masanpham').val();
            var tensanpham = $('#tensanpham').val();
            var matheloai = $('#matheloai').val();
            var soluong = $('#soluong').val();
            var nhanhieu = $('#manhanhieu').val();
            var giatien = $('#giatien').val();
            var active = $('#Active:checked').val();
            var url = "<?php echo route('addsanpham_api'); ?>";
            console.log(matheloai +" - "+ nhanhieu);
//            return
            $.ajax({
                'url':url,
                'data':{
                    '_token': _token,
                    'tensanpham': tensanpham,
                    'matheloai': matheloai,
                    'soluong': soluong,
                    'manhanhieu': nhanhieu,
                    'giatien': giatien,
                    'active': active
                },
                'type':'POST',
                success: function(data){
                    console.log(data);
                    $('#AddModel').modal('hide');
                    if(data){
                        var at;
                        var price = formatNumber(data.result.giatien);
                        if(data.result.active == 1){
                            at = "YES";
                        }
                        else{
                            at ="NO";
                        }
                        var result = "<tr id='" + data.result.id + "'>";
                        result += "<td id='msp"+data.result.id+"'>"+data.result.id+"</td>";
                        result += "<td id='tsp"+data.result.id+"'>"+data.result.tensanpham+"</td>";
                        result += "<td id='sl"+data.result.id+"'>"+data.result.soluong+"</td>";
                        result += "<td id='nh"+data.result.id+"'>"+data.result.nhan_hieu.tennhanhieu+"</td>";
                        result += "<td id='gt"+data.result.id+"'>"+price+"</td>";
                        result += "<td id='at"+data.result.id+"'>"+at+"</td>";
                        result += "<td>";
                        result += "<div class=\"hidden-sm hidden-xs action-buttons\">";
                        result += "<a class=\"green\" href=\"#\">";
                        result += "<i class=\"ace-icon fa fa-pencil bigger-130\"></i>";
                        result += "</a>";
                        result += "<a class=\"red\" href=\"#\">";
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
                        result += "<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">";
                        result += "<span class=\"green\">";
                        result += "<i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>";
                        result += "</span>";
                        result += "</a>";
                        result += "</li>";
                        result += "<li>";
                        result += "<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">";
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
                        $("#rowSanPham").prepend(result);
                    }



                }
            })
        });

        function formatNumber (num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }

        $('tbody#rowSanPham').on('click','.edit_sanpham',function(){
            $('#editSanpham').show();
            $('#addSanpham').hide();
            var masanpham = $(this).data('id');
            var tensanpham = $(this).data('tensanpham');
            var matheloai = $(this).data('matheloai');
            var soluong = $(this).data('soluong');
            var manhanhieu = $(this).data('manhanhieu');
            var giatien = $(this).data('giatien');
            var Active = $(this).data('active');
            console.log(" 1 " + matheloai);
            getdata();
            if(Active == 1){
                var $radios = $('input:radio[name=active]');
                $radios.filter('[value=1]').prop('checked', true);

            }
            else{
                var $radios = $('input:radio[name=active]');
                $radios.filter('[value=0]').prop('checked', true);
            }
//            console.log(matheloai);
            var modal = $('#AddModel');
            console.log(" 2 " + matheloai);
            modal.find("#masanpham").val(masanpham);
            modal.find("#tensanpham").val(tensanpham);
            modal.find("#matheloai").val(matheloai);
//            modal.find("#matheloai").val(1)
            modal.find("#soluong").val(soluong);
            modal.find("#manhanhieu").val(manhanhieu);
            modal.find("#giatien").val(giatien);
            console.log(" 3 " + matheloai);
            console.log($('#matheloai').val());
        });

        $('#editSanpham').click(function(e){
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var masanpham = $('#masanpham').val();
            var tensanpham = $('#tensanpham').val();
            var matheloai = $('#matheloai').val();
            var soluong = $('#soluong').val();
            var nhanhieu = $('#manhanhieu').val();
            var giatien = $('#giatien').val();
            var active = $('#Active:checked').val();

            var url = "<?php echo route('editsanpham_api'); ?>";
            $.ajax({
                'url': url,
                'data':{
                    '_token': _token,
                    'id': masanpham,
                    'tensanpham': tensanpham,
                    'matheloai': matheloai,
                    'soluong': soluong,
                    'manhanhieu': nhanhieu,
                    'giatien': giatien,
                    'active': active
                },
                'type':'POST',
                success: function(data){
                    $('#AddModel').modal('hide');
                    if(data != null){
                        $('#tsp' + masanpham).html(tensanpham);
                        $('#sl' + masanpham).html(soluong);
                        $('#nh' + masanpham).html(data.result.nhan_hieu.tennhanhieu);
                        $('#gt' + masanpham).html(matheloai);
                        if(active == 1){
                            $('#td_at' + masanpham).html("YES");
                        }
                        else{
                            $('#td_at' + masanpham).html("NO");
                        }
                        var id_edit = 'edit' + masanpham;
                        var temp = document.getElementById(id_edit);
                        temp.setAttribute("data-tensanpham", tensanpham);
                        temp.setAttribute("data-matheloai", matheloai);
                        temp.setAttribute("data-soluong", soluong);
                        temp.setAttribute("data-nhanhieu", nhanhieu);
                        temp.setAttribute("data-giatien", giatien);
                        temp.setAttribute("data-active", active);
                        var content = temp.outerHTML;
                        temp.outerHTML = content;

                    }
                    else{

                    }


                }
            })
        });

        $('tbody#rowSanPham').on('click','.delete_sanpham',function(){
            var masanpham = $(this).data('id');
            $("#row_id_del").val( masanpham );
        });

        $('#delete_').click(function(e){
            var _token = $("input[name='_token']").val();
            var masanpham = $('#row_id_del').val();
            var url = "<?php echo route('deletesanpham'); ?>";
            console.log(masanpham);
            $.ajax({
                'url':url,
                'data':{
                    '_token': _token,
                    'id': masanpham
                },
                'type':'POST',
                success: function(data){
                    $('#confirm_delete').modal('hide');
                    if(data.result == 1){
                        $("#" +masanpham).remove();
                    }
                    else{

                    }


                }
            })
        });







        function getdata() {

            $('#matheloai')
                .empty();
            $.ajax({
                'url':'/api/danhsachtheloai_api',
                'type':'GET',
                success: function(data){
                    var t;
//                    console.log(data);
                    for(var key in data){
                        t = data[key];
                    }
                    t.forEach(function(entry) {
                        $('#matheloai')
                            .append($("<option></option>")
                                .attr("value",entry.id)
                                .text(entry.tentheloai));
                    });
                }
            });
            $('#manhanhieu')
                .empty();
            $.ajax({
                'url':'/api/danhsachncc_api',
                'type':'GET',
                success: function(data){
                    var t;
                    for(var key in data){
                        t = data[key];
                    }
                    t.forEach(function(entry) {
                        $('#manhanhieu')
                            .append($("<option></option>")
                                .attr("value",entry.id)
                                .text(entry.tennhanhieu));
                    });
                }
            })
        }




    </script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('menusanpham'); ?>
    open
<?php $__env->stopSection(); ?>

<?php $__env->startSection('componentsanpham'); ?>
    open
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>