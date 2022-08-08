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
                <form action="{{route('users.index')}}" method="GET">
                    
                    <button type="submit" class="dropdown-item {{Route::currentRouteName() == 'users.index' ? 'active': '' ; }} " clbuttonss="dropdown-item">list</a>
                </form>
                </li>
                <li>
                  <form action="{{route('posts.index')}}" method="GET">
                      
                      <button type="submit" class="dropdown-item {{Route::currentRouteName() == 'posts.index' ? 'active': '' ; }} " clbuttonss="dropdown-item">posts</a>
                  </form>
                  </li>
              <li><hr class="dropdown-divider"></li>
                <li>
                
                
                    <a type="submit" href="{{route('users.create')}}" class="dropdown-item {{Route::currentRouteName() == 'users.create' ? 'active': '' ; }}" href=>New User</a>
                
                </li>
                
              </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>