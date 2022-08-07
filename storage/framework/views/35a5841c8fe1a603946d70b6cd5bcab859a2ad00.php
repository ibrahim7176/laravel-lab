<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <?php echo csrf_field(); ?>
        <label for="name">name</label>
        <input type="text" name="name" value="<?php echo e($user['name']); ?>">
        <label for="email">email</label>
        <input type="email" name="email" value="<?php echo e($user['email']); ?>">
        <input type="submit" value="submit">
    </form>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\labs\resources\views/users/edite.blade.php ENDPATH**/ ?>