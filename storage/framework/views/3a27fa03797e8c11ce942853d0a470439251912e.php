<?php $__env->startSection('sanpham'); ?>
    
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
                <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                    <td><?php echo e($item->maSanPham); ?></td>
                    <td><?php echo e($item->tenSanPham); ?></td>
                    <td><?php echo e($item->soLuong); ?></td>
                    <td><?php echo e($item->NhanHieu->tenNhanHieu); ?></td>
                    <td><?php echo e(number_format($item->GiaTien)); ?></td>
                    <td><?php echo e($item->Active == 1 ? 'Yes' : 'No'); ?></td>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <div class="pull-right" > <?php echo $sanpham->links(); ?> </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('menusanpham'); ?>
    open
<?php $__env->stopSection(); ?>

<?php $__env->startSection('componentsanpham'); ?>
    open
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>