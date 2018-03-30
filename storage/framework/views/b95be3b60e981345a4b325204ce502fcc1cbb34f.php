<?php $__env->startSection('pagename',"all Posts"); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
			
		</div>
		<div class="col-md-2">
			<?php echo Html::linkRoute('post.create','New Post',[],['class'=>'btn btn-primary btn-block']); ?>

		</div>
	</div>
	<div class="row col-md-12">
		<table class="table">
				<thead>
					<th>Id</th>
					<th>Title</th>
					<th>body</th>
					<th>created at</th>
					<th>last update</th>
					<th></th>
				</thead>
				<tbody>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($post->id); ?></td>
							<td><?php echo Html::linkRoute('post.show',$post->title,[$post->id]); ?></td>
							<td><?php echo e(substr($post->body,0,50)); ?> <?php echo e(strlen($post->body) > 50 ? "...":""); ?></td>
							<td><?php echo e($post->created_at); ?></td>
							<td><?php echo e($post->updated_at); ?></td>
							<td>
								<?php echo Html::linkRoute('post.show','View',[$post->id],["class"=>'btn btn-default btn-sm']); ?>

								<?php echo Html::linkRoute('post.edit','Edit',[$post->id],["class"=>'btn btn-default btn-sm']); ?>

								<?php echo Form::open( ['route'=>['post.destroy',$post->id],'method'=>'DELETE']); ?>	
			
								<?php echo Form::submit('Delete',['class'=>'btn btn-default btn-sm']); ?>

						
								<?php echo Form::close(); ?>

							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>