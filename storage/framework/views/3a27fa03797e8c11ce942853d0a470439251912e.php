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
                <tr id=<?php echo e($item->maSanPham); ?>>
                    <td id='msp<?php echo e($item->maSanPham); ?>'><?php echo e($item->maSanPham); ?></td>
                    <td id='tsp<?php echo e($item->maSanPham); ?>'><?php echo e($item->tenSanPham); ?></td>
                    <td id='sl<?php echo e($item->maSanPham); ?>'><?php echo e($item->soLuong); ?></td>
                    <td id='nh<?php echo e($item->maSanPham); ?>'><?php echo e($item->NhanHieu->tenNhanHieu); ?></td>
                    <td id='gt<?php echo e($item->maSanPham); ?>'><?php echo e(number_format($item->GiaTien)); ?></td>
                    <td id='at<?php echo e($item->maSanPham); ?>'><?php echo e($item->Active == 1 ? 'Yes' : 'No'); ?></td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">


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
                                        <input id="maSanPham" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::TBL_maSanPham); ?>" placeholder="Mã thể loại" ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên sản phẩm</label>
                                    <div class="col-lg-10">
                                        <input id="tenSanPham" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::TBL_tenSanPham); ?>" placeholder="Tên thể loại" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Loại sản phẩm</label>
                                    <div class="col-lg-10">
                                        
                                        <select class="form-control ng-pristine ng-untouched ng-valid" id="tenTheLoai" name="<?php echo e(App\Constant::TBL_MaTheLoai); ?>">
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Số lượng</label>
                                    <div class="col-lg-10">
                                        <input id="soLuong" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::TBL_soLuong); ?>" placeholder="Tên thể loại" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nhãn hiệu</label>
                                    <div class="col-lg-10">
                                        <input id="nhanHieu" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::TBL_NhanHieu); ?>" placeholder="Tên thể loại" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Giá tiền</label>
                                    <div class="col-lg-10">
                                        <input id="giaTien" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="<?php echo e(App\Constant::TBL_GiaTien); ?>" placeholder="Tên thể loại" ng-model="currItem.major">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Active</label>
                                    <div class="col-lg-10">
                                        <input id="Active" type="radio" name="<?php echo e(App\Constant::TBL_Active); ?>" value="1"> Yes<br>
                                        <input id="Active" type="radio" name="<?php echo e(App\Constant::TBL_Active); ?>" value="0"> No<br>
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
                        var codeTheLoai = entry.maTheLoai;
                        var temp = '\\getSanPhamById\\'+codeTheLoai;
                        result += "<li class=>";
                        result += "<a href= "+temp+" >";
                        result += "<i class=\"menu-icon fa fa-caret-right\"></i>";
                        result += ""+entry.tenTheLoai+"";
                        result += "</a>";
                        result += "<b class=\"arrow\"></b>";
                        result += "</li>";

                    });
                    $("#sub_id_sanpham").append(result);
                }
            })
        };



        //        $(document).ready(function () {
        $( "#add_sanpham" ).click(function() {
            console.log("add san pham");
            $(".modal-body").find("#maTheLoai,#tenTheLoai").val('').end();
            var $radios = $('input:radio[name=Active]');
            $radios.filter('[value=1]').prop('checked', false);
            $radios.filter('[value=0]').prop('checked', false);
            $.ajax({
                'url':'/api/danhsachtheloai_api',
                'type':'GET',
                success: function(data){
                    var t;
                    console.log(data);
                    for(var key in data){
                        t = data[key];
                    }
                    t.forEach(function(entry) {
                        $('#tenTheLoai')
                            .append($("<option></option>")
                                .attr("value",entry.maTheLoai)
                                .text(entry.tenTheLoai));
                    });
                }
            })
            $('#add_').show();
            $('#edit').hide();
        });
        //        });


        











            
                
                
                    
                    
                    
                    
                    
                    
                    
                    
                
                
                
                    

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    



                
            
        




    </script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('menusanpham'); ?>
    open
<?php $__env->stopSection(); ?>

<?php $__env->startSection('componentsanpham'); ?>
    open
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>