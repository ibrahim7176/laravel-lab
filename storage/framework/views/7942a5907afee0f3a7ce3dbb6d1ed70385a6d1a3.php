
<?php $__env->startSection('title','showPost'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>post Name : <?php echo e($post['title']); ?></h1>
    <p>post body : <?php echo e($post['body']); ?></p>    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\labs\resources\views/posts/show.blade.php ENDPATH**/ ?>