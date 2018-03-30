<!doctype html>
<html lang="en">

  <?php echo $__env->make('Partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <body>
    
    <?php echo $__env->make('Partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
      <!-- the container -->
      <div class="container">
        <?php if(Session::has("success")): ?>
        <div class="alert alert-success">
          success <?php echo e(Session::get('success')); ?>

        </div>
        <?php endif; ?>
        
        <?php echo $__env->yieldContent('content'); ?>
        
      </div>

    <!-- Optional JavaScript -->
    <?php echo $__env->make('Partials/_script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </body>
</html>