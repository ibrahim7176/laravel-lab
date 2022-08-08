<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Users
            </a>
            <ul class="dropdown-menu">
              <li>
                <form action="<?php echo e(route('users.index')); ?>" method="GET">
                    
                    <button type="submit" class="dropdown-item <?php echo e(Route::currentRouteName() == "users.index" ? 'active': "" ); ?> " clbuttonss="dropdown-item">list</a>
                </form>
                </li>
              <li><hr class="dropdown-divider"></li>
                <li>
                
                
                    <a type="submit" href="<?php echo e(route('users.create')); ?>" class="dropdown-item <?php echo e(Route::currentRouteName() == "users.create" ? 'active': "" ); ?>" href=>New User</a>
                
                </li>
              </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav><?php /**PATH C:\xampp\htdocs\laravelIti\laravel-intro\resources\views/includes/navbar.blade.php ENDPATH**/ ?>