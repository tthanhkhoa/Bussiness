<?php $__env->startSection('slider'); ?>
    <?php echo $__env->make('client.compoment.slider',['slider' => $slider], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('home'); ?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Các sản phẩm nổi bật</h2>
    <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-4" >
        <div class="product-image-wrapper" >
            <div class="single-products" >
                <div class="productinfo text-center">
                    <a href="<?php echo e(route('chitietsanpham',['id'=>$item->id])); ?>">
                        <img  width="80" height="180" alt="80x180"
                              src="<?php echo e(isset($item->Images->first()->image_url) ? $item->Images->first()->image_url : asset('images/defaut/S2B.jpg')); ?>"  />
                        <div style="display: inline-grid" >
                            <h2 ><?php echo e(isset($item->giatien) ? number_format($item->giatien) : '0'); ?> VNĐ</h2>
                            <p style="height:20px;" ><?php echo e(isset($item->tensanpham) ? $item->tensanpham : 'S2B Beauty'); ?></p>
                        </div>
                        <a href="#" class="btn btn-default add-to-cart" style="float:right;"><i style="display: inline;" class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>

                    </a>

                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào ưu thích</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>



    
        
            
            
            
            
            
        
    
    
        
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
        

        
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
        

        
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
        

        
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            


        
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
            
                
                    
                        
                            
                            
                            
                            
                        

                    
                
            
        
        
            
        
    
    





<?php $__env->startSection('slidebar'); ?>
    <?php echo $__env->make('client.compoment.slidebar',['TheLoai' => $theloai], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.compoment.header',['thongtin' => $thongtin], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>