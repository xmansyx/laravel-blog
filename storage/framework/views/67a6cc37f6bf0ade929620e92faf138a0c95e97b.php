<?php $__env->startSection('pagename','| welcome'); ?>
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
                <div class="post">
                    <h1 class="postTitle">post title</h1>
                    <p>sLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates similique dolores minus eligendi illo assumenda libero repellat repellendus quia non, iusto labore, id tempore eaque praesentium officia amet, laudantium blanditiis?</p>
                    <a href="#" class="btn btn-primary"> read more</a>
                </div>

                <hr>

                <div class="post">
                    <h1 class="postTitle">post title</h1>
                    <p>sLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates similique dolores minus eligendi illo assumenda libero repellat repellendus quia non, iusto labore, id tempore eaque praesentium officia amet, laudantium blanditiis?</p>
                    <a href="#" class="btn btn-primary"> read more</a>
                </div>

                <hr>

                <div class="post">
                    <h1 class="postTitle">post title</h1>
                    <p>sLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates similique dolores minus eligendi illo assumenda libero repellat repellendus quia non, iusto labore, id tempore eaque praesentium officia amet, laudantium blanditiis?</p>
                    <a href="#" class="btn btn-primary"> read more</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h1> sideBar</h1>
                
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>