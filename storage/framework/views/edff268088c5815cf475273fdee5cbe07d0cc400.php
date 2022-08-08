
<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('posts.update',['id'=>$post['id']])); ?>" method="POST">
    <?php echo method_field('put'); ?>
    <?php echo csrf_field(); ?>
    <div class="form-group p-2">
      <label class="p-2" for="name">title</label>
      <input type="name" name="title" class="form-control"  value="<?php echo e($post['title']); ?>" aria-describedby="emailHelp" >
      
    </div>
    <div class="form-group p-2">
      <label  class="p-2" for="exampleInputPassword1" class="p-2">body</label>
      <input type="text" name="body" class="form-control " value="<?php echo e($post['body']); ?>"  >
    </div>
    <div class="form-group p-2">
      <label  class="p-2"  class="p-2">enabled</label>
      <input type="text" name="enabled" class="form-control " value="<?php echo e($post['enabled']); ?>"  >
    </div>
    <button type="submit" class="btn  btn-primary">Edite</button>
  </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\labs\resources\views/posts/edit.blade.php ENDPATH**/ ?>