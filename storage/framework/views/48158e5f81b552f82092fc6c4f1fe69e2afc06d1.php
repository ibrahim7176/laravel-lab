
<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('users.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <div class="form-group p-2">
      <label class="p-2" for="exampleInputEmail1">Name</label>
      <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <div class="form-group p-2">
      <label  class="p-2" for="exampleInputPassword1" class="p-2">Email</label>
      <input type="email" name="email" class="form-control " id="exampleInputPassword1" placeholder="Email">
    </div>
    
    <button type="submit" class="btn  btn-primary">Submit</button>
  </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelIti\laravel-intro\resources\views/users/create.blade.php ENDPATH**/ ?>