<?php $__env->startSection('content'); ?>


<br>

    <div class='list'>
        <div class='container'>
            <br> <br> 
            <center><h1>Delete user</h1></center>
            <br>
            <table class=table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        

                    <tr>
                        <td class='r'>id</td>
                        <td class='r'>test</td>
                        <td class='l'><a href='/admin.edit'>Edit</a></td>
                        <td class='l'><a href='/admin.delete'>Delete</a></td>
                    </tr>
            </table>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>