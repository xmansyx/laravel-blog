<?php $__env->startSection('pagename',' welcome'); ?>
<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p class="lead">hi ana mostafa</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post">
                        <h1 class="postTitle"><?php echo e($post->title); ?></h1>
                        <p>
                            <?php echo e(substr($post->body,0,150)); ?><?php echo e(strlen($post->body) > 50 ? '...':''); ?>

                            
                        </p>
                        <?php echo Html::linkRoute('post.show','read more',[$post->slug],['class' => 'btn btn-primary']); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

                
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h1> sideBar</h1>
                
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>