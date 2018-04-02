<?php $__env->startSection("pagename"," $post->title"); ?>
<?php $__env->startSection("content"); ?>

	<div class="row">
		<div class="col-md-8">
			<h2> <?php echo e($post->title); ?> </h2>
			<div class="lead">
				<?php echo e($post->body); ?>

			</div>
		</div>
		<div class="col-md-3 col-md-offset-1">
			<div class="well">
				<dl class="dl-horizontel">
					<dt>Created at</dt>
					<dl><?php echo e(date("D dS\, M Y g\:i A",strtotime($post->created_at))); ?></dl>
				</dl>

				<dl class="dl-horizontel">
					<dt>updated at</dt>
					<dl><?php echo e(date("D dS\, M Y g\:i A",strtotime($post->updated_at))); ?></dl>
				</dl>

				<div class="row">
					<div class="col-md-6">
						<?php echo Html::linkRoute('post.edit','Edit',[$post->id],['class'=>'btn btn-primary btn-block']); ?>	
					</div>

					<div class="col-md-6 ">
						<?php echo Form::open( ['route'=>['post.destroy',$post->id],'method'=>'DELETE']); ?>	
			
						<?php echo Form::submit('Delete',['class'=>'btn btn-danger btn-block']); ?>

						
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
			
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>