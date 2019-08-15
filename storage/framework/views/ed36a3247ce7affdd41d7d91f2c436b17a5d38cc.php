<?php $__env->startSection('content'); ?>


<br>

    <div class='list'>
        <div class='container'>
            <br> <br> 
            <h1>Home page</h1>
            <br>
            You shoud  
            <a href='/login'>login</a>
            or 
            <a href='/insert'>create new account</a>
        
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>