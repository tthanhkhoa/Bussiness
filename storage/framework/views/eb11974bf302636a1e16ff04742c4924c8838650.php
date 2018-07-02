
    <h2>Sản Phẩm</h2>


    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        <?php $__currentLoopData = $TheLoai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo e(isset($item->id) ? $item->id  : ''); ?>">
                            
                                
                            
                            <?php echo e(isset($item->tentheloai) ? $item->tentheloai : 'Product name'); ?>

                        </a>
                    </h4>
                </div>
                <div id="<?php echo e(isset($item->id) ? $item->id : ''); ?>" class="panel-collapse collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <ul>
                            <?php $__currentLoopData = $item->SanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sanpham): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('chitietsanpham',['id'=>$sanpham->id])); ?>"><?php echo e(isset($sanpham->tensanpham) ? $sanpham->tensanpham : ''); ?> </a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    

    
        
        
            
                
                
                
                
                
                
                
            
        
    

    
        
        
            
            
        
    

    <div class="shipping text-center"><!--shipping-->
        <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/20994205_779346652247356_7845732814713790109_n.jpg?oh=8e9b61cb18551424529d25c5fdd5ad55&oe=5A15582B" alt="" />
    </div><!--/shipping-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>