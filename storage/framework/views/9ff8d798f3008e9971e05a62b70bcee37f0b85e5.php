<?php $__env->startSection("pagename"," $post->title"); ?>
<?php $__env->startSection("content"); ?>

	<div class="row">
		<?php echo Form::model($post,['route' => ['post.update',$post->id],"method"=>"PUT"]); ?>


		<div class="col-md-8">
			<?php echo e(Form::label('title',"Title:")); ?>

			<?php echo e(Form::text("title",null,["class"=>"form-control"])); ?> 
			<?php echo e(Form::label('body',"body:")); ?>

			<?php echo e(Form::textarea("body",null,["class"=>"form-control"])); ?>

			
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
					<div class="col-md-12">
						<?php echo e(Form::submit("save changes",['class'=>'btn btn-primary btn-block '])); ?>

					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<?php echo Html::linkRoute('post.show','Cancel',[$post->id],["class"=>'btn btn-danger btn-block']); ?>

					</div>
				</div>
			</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>