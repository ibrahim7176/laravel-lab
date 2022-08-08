
<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startSection('content'); ?>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Verfiaed At</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($user['id']); ?></th>
            <td ><a href="<?php echo e(route('users.show' , ['id' =>$user['id'] ])); ?>"><?php echo e($user['name']); ?></a></td>
            <td><?php echo e($user['email']); ?></td>
            <td><?php echo e($user['email_verified_at']); ?></td>
            <td>
                
                <form class="d-inline" action="<?php echo e(route('users.edit' , ['id' => $user['id']])); ?>" method="GET">
                    <button type="submit" class="btn btn-primary">Edit</button>  
                </form>

                <form class="d-inline" action="<?php echo e(route('users.destroy' , ['id' => $user['id'] ])); ?>" method="POST">
                    <?php echo method_field("delete"); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger">Delelte</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

    </tbody>
  </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelIti\laravel-intro\resources\views/users/index.blade.php ENDPATH**/ ?>