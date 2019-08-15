<?php $__env->startSection('content'); ?>


<br>

    <div class='list'>
        <div class="table-responsive" class='container' >
            <br> <br> 
            <h1>Admin dashboard</h1>
            <br>
            <table class=table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allusers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class='r'><?php echo e($allusers->id); ?></td>
                    <td class='r'><?php echo e($allusers->username); ?></td>
                    <td class='r'><?php echo e($allusers->password); ?></td>
                    <?php if($allusers->gender =='M'): ?>
                        <td class='r'>Male</td>
                    <?php else: ?>
                        <td class='r'>Female</td>
                    <?php endif; ?>
                    <td class='r'><?php echo e($allusers->email); ?></td>
                    <?php if($allusers->role == 1): ?>
                        <td class='r'>Admin</td>
                    <?php else: ?>
                        <td class='r'>User</td>
                    <?php endif; ?>
                    
                    <td class='l'><a href='/admin.edit/<?php echo e($allusers->id); ?>'>Edit</a></td>
                    <td class='l'><a href='/admin.delete/<?php echo e($allusers->id); ?>'>Delete</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <a href='/admin.insert'>Add new Blogger</a>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>