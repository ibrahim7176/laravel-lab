
<?php $__env->startSection('title','showUser'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>user Name : <?php echo e($user['name']); ?></h1>
    <h1>user Email : <?php echo e($user['email']); ?></h1>    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\labs\resources\views/users/show.blade.php ENDPATH**/ ?>