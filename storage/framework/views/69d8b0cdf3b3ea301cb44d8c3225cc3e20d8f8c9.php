<?php $__env->startSection('content'); ?>

         

    <h1> Login </h1> <br> <br>
    
    <form action='login' method='post' class="form-inline">
    <?php echo e(csrf_field()); ?>

        <div class="form-group">
          <label for="Username">Username:</label>
          <input type="text" class="form-control" name="username">
        </div>
        <br> <br>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password">
        </div>
        <br> <br>
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <br> <br>
        <button type="submit" class="btn btn-default">Login</button>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>