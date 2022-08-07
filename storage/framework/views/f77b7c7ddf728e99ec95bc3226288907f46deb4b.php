
<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startSection('content'); ?>
    
   <form action="<?php echo e(route('users.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label for="name">name</label>
    <input type="text" name="name" >
    <label for="email"></label>
    <input type="email" name="email">
    <input type="submit" >
   </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\labs\resources\views/users/create.blade.php ENDPATH**/ ?>