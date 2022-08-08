
<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('posts.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <div class="form-group p-2">
      <label class="p-2" for="exampleInputEmail1">title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
    </div>
    
    <div class="form-group p-2">
      <label  class="p-2" for="exampleInputPassword1" class="p-2">body</label>
      <input type="text" name="body" class="form-control "  >
    </div> 
    
    <div class="form-group p-2">
      <label  class="p-2"  class="p-2">enabled</label>
      <input type="text" name="enabled" placeholder="on or off" >
    </div>
    
    <button type="submit" class="btn  btn-primary">Submit</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\labs\resources\views/posts/create.blade.php ENDPATH**/ ?>