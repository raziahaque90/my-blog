<header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 header-top">
                <h1 class="">My Blog</h1>
                <p class="text-warning">{{date('l')}}, {{date('F', strtotime(date('Y/m/d')))}} {{date('d')}}, {{date('Y')}}</p>
                
            </div>
            <div class="col-10 pb-5">
                <nav class="navbar navbar-expand-lg">
                     <div class="container-fluid">   
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a class="nav-link active" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('category')}}">Category</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Registration</a></li>
                                
                              </ul>
                            </li>
                            
                          </ul>
                          
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
</header>