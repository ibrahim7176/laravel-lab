<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>

   
    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user['id']); ?></td>
            <td><?php echo e($user['name']); ?></td>
            <td><?php echo e($user['email']); ?></td>
            <td><a  class="btn btn-primary"   href="<?php echo e(route('users.edit',['id'=>$user['id']])); ?>" >edit</a><td>
            <td><a  class="btn btn-danger" href="<?php echo e(route('users.destroy' , ['id' => $user['id'] ])); ?>">Delete</a><td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\labs\resources\views/users/index.blade.php ENDPATH**/ ?>