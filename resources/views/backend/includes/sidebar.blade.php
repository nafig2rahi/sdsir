<ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{URL::to('/d
      ashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span >Dashboard</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header"><i class="fas fa-paperclip"></i> Clips</h6>
        <a class="dropdown-item" href={{URL::to('/login')}}>Login</a>
        <a class="dropdown-item" href={{URL::to('/register')}}>Register</a>
        <a class="dropdown-item" href={{URL::to('/logout')}}>Logout</a>
        {{-- <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="dropdown-item" href="404.html">404 Page</a>
        <a class="dropdown-item" href="blank.html">Blank Page</a> --}}
      </div>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Chart s</span></a>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fab fa-500px"></i>
        <span>Tables</span></a>
    </li> --}}   
    
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('/addpost') }}">
        <i class="fa fa-clone"></i>
        <span>Add Post</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('/allpost') }}">
        <i class="fa fa-clipboard"></i>
        <span>All Post</span></a>
    </li>
  </ul>