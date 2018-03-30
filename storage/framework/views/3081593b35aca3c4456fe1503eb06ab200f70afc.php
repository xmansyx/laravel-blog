<?php $__env->startSection("pagename","| create post"); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route' => 'post.store']); ?>


			<h1>Creat new post</h1>
			<?php echo e(Form::submit("Post",['class'=>'btn btn-primary btn-lg '])); ?>

			<hr>
    		<?php echo e(Form::label('title',"Title:")); ?>

    		<?php echo e(Form::text('title',null,['placeholder'=>'post title','class'=>'form-control'])); ?>


    		<?php echo e(Form::label('post_body',"Post Body:")); ?>

    		<?php echo e(Form::textarea('post_body',null,['placeholder'=>'hi','class'=>'form-control'])); ?>

			<hr>
		<?php echo Form::close(); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>