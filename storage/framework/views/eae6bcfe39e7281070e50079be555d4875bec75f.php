

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    <?php 
                        $i = 0;
                     ?>
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($i == 0): ?>
                                <div class="item active" >
                                    <div class="col-sm-6" >
                                        <h1 class="text-center"><span>S2B</span> BEAUTY</h1>
                                        <h2 class="text-center"><?php echo e(isset($item->gioithieu) ? $item->gioithieu : ''); ?></h2>
                                        <p class="text-center"><?php echo e(isset($item->contact) ? $item->contact : ''); ?> </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img width="400" height="400" src="<?php echo e(isset($item->image_url) ? $item->image_url : ''); ?>" class="girl img-responsive" alt="200x200" />
                                        
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="item" >
                                    <div class="col-sm-6" >
                                        <h1 class="text-center"><span>S2B</span> BEAUTY</h1>
                                        <h2 class="text-center"><?php echo e(isset($item->gioithieu) ? $item->gioithieu : ''); ?></h2>
                                        <p class="text-center"><?php echo e(isset($item->contact) ? $item->contact : ''); ?> </p>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <img width="400" height="400" src="<?php echo e(isset($item->image_url) ? $item->image_url : ''); ?>" class="girl img-responsive" alt="" />
                                        
                                    </div>
                                </div>
                            <?php endif; ?>
                                <?php 
                                    $i++;
                                 ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                            
                                
                                
                                
                                
                            
                            
                                
                                
                            
                        

                        
                            
                                
                                
                                
                                
                            
                            
                                
                                
                            
                        

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
