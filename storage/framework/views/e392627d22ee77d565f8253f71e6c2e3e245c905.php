
<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('users.update',['id'=>$user['id']])); ?>" method="POST">
    <?php echo method_field('put'); ?>
    <?php echo csrf_field(); ?>
    <div class="form-group p-2">
      <label class="p-2" for="name">Name</label>
      <input type="name" name="name" class="form-control"  value="<?php echo e($user['name']); ?>" aria-describedby="emailHelp" >
      
    </div>
    <div class="form-group p-2">
      <label  class="p-2" for="exampleInputPassword1" class="p-2">Email</label>
      <input type="email" name="email" class="form-control " value="<?php echo e($user['email']); ?>"  >
    </div>
    <div class="form-group p-2">
      <label  class="p-2" for="exampleInputPassword1" class="p-2">password</label>
      <input type="text" name="password" class="form-control " value="<?php echo e($user['password']); ?>"  >
    </div>
    <button type="submit" class="btn  btn-primary">Submit</button>
  </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\labs\resources\views/users/edit.blade.php ENDPATH**/ ?>