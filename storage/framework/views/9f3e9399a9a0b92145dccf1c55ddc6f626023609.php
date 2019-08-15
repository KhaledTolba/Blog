<?php $__env->startSection('content'); ?>


<br>

    <div class='list'>
        <div class='container'>
            <br> <br> 
            <form action='/admin.edit/<?php echo e($user->id); ?>' method='post' class="form-inline">
                <h1>Edit user</h1> <br> <br>
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="Username">Username </label>
                        <input type="text" class="form-control" value='<?php echo e($user->username); ?>' name='username'>
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <label for="Password">Password </label>
                        <input type="text" class="form-control" value='<?php echo e($user->password); ?>' name='Password'>
                    </div>
                    <br> <br>
                    <div class="form-group">
                    <?php if($user->gender =='M'): ?>
                    <label for="Gender">Gender: </label>
                        <label class="radio-inline"><input type='radio' value='M' name='gender' checked/> Male</label>
                        <label class="radio-inline"><input type='radio' value='F' name='gender'/> Female</label>
                    <?php else: ?>
                    <label for="Gender">Gender: </label>
                        <label class="radio-inline"><input type='radio' value='M' name='gender'/> Male</label>
                        <label class="radio-inline"><input type='radio' value='F' name='gender' checked/> Female</label>
                    <?php endif; ?> 
                    </div>

                    <br> <br>
                    <div class="form-group">
                        <label for="Email">Email </label>
                        <input type="text" class="form-control" value='<?php echo e($user->email); ?>' name='email'>
                    </div>
                    <br> <br>

                    <div class="form-group">
                        <input type="hidden" class="form-control" value='<?php echo e($user->id); ?>' name='id'>
                    </div>
                    <div class="form-group">
                    <?php if($user->role == 1): ?>
                    <label for="Role">Role: </label>
                        <label class="radio-inline"><input type='radio'  value='1' name='role' checked/>admin</label>
                        <label class="radio-inline"><input type='radio'  value='0' name='role'/>user</label>
                    <?php else: ?>
                    <label for="Role">Role: </label>
                        <label class="radio-inline"><input type='radio'  value='1' name='role'/>admin</label>
                        <label class="radio-inline"><input type='radio'  value='0' name='role' checked/>user</label>
                    <?php endif; ?>
                    </div>
                    <br> <br>
                    <input type='submit' class="btn btn-default" value='Update' />
                
            </form>
                
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>