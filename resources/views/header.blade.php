

{{-- <header class="clearfix sticky-top">
    <a href="{{ route('homepage') }}"><h4 class="float-left p-md-3">HOME</h4></a>
    <div class="float-right">  
        <div class="d-flex p-md-3">
            <!-- if user have not login yet -->
            <?php 
        //    if(!isset($_SESSION)) {
                //  session_start();
            // }
            //  if (isset($_SESSION['user'])) {
                // if($_SESSION['user']==-1){ ?>
                    <div id="user-box" class="dropdown">
                        <i class="fa fa-user-circle dropdown-toggle" aria-hidden="true" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('login')}}">Login</a>
                            <a class="dropdown-item" href="{{route('signup')}}">Sign up</a>
                        </div>
                    </div>
            <!-- admin case-->
            <?php 
            // }elseif($_SESSION['user']==0) {
                /?>
            <div class="dropdown login">
                <b class="dropdown-toggle" aria-hidden="true" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</b>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('admin')}}">More>></a>
                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
            <!-- user login-->
          <?php 
          } else{
               ?>
            <div class="dropdown login">
                <b class="dropdown-toggle" aria-hidden="true" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$users->name}}</b>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <!-- <img style="height: 30px;width: 30px" src=.{{$users->avatar}}> -->
                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
            </div>    
                    <?php 
            //         }}else{
            // $_SESSION['user']=-1;
            ?>
            <div id="user-box" class="dropdown">
                <i class="fa fa-user-circle dropdown-toggle" aria-hidden="true" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('login')}}">Login</a>
                    <a class="dropdown-item" href="{{route('signup')}}">Sign up</a>
                </div>
            </div>   
            <?php }?>
            <!-- user box -->
            <form method="post" action="{{route('search')}}">
                @csrf
                <div id="bar" class="container-sm">
                    <div class="collapse" id="searchbar">
                        <div class="card-subtitle">
                            <input name="search" class="outline-gradient-info" placeholder="Search...">
                        </div>
                    </div>
                    <i type="submit" class="fa fa-search" data-toggle="collapse" href="#searchbar" aria-expanded="true" style="padding: 4.5px 4.5px;">
                    </i>
                </div>
            </form>
        </div>
    </div>
</header> --}}


<header id="header" class="header-theme">
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#"><img src="{{asset('public/images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Movie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('list')}}">My list</a>
                </li>

            </ul>
            <form class="form-inline mt-2 mt-md-0" method="post" action="{{route('search')}}">
                @csrf
                <div class="search-box">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search" id="search">
                    <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- if user have not login yet -->
        <?php 
           if(!isset($_SESSION)) {
                 session_start();
            }
             if (isset($_SESSION['user'])) {
                if($_SESSION['user']==-1){ 
        ?>
        <div class="dropdown">
            <button class="btn dropdown-toggle" aria-hidden="true" id="user-choice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle"></i></button>
            <!-- <button class="btn dropdown-toggle" aria-hidden="true" id="user-choice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ngocnguyen</button> -->
            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="user-choice">
                <a class="dropdown-item" href="{{route('login')}}">Sign in</a>
            <a class="dropdown-item" href="{{route('signup')}}" >Sign up</a>
            </div>
        </div>
        {{-- admin case --}}
        <?php 
                } elseif($_SESSION['user']==0) {
        ?>
        <div class="dropdown">
            <button class="btn dropdown-toggle" aria-hidden="true" id="user-choice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin</button>
            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="user-choice">
                <a class="dropdown-item" href="{{route('admin')}}">Admin homepage</a>
                <a class="dropdown-item" href="{{route('logout')}}">Sign out</a>
            </div>
        </div>
         {{-- user login --}}
        <?php 
                } else {
        ?>
        <div class="dropdown">
            <button class="btn dropdown-toggle" aria-hidden="true" id="user-choice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{$users->name}}</button>
            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="user-choice">
                <a class="dropdown-item" href="{{route('logout')}}">Sign out</a>
            </div>
        </div>
        <?php 
                }
            }else{
            $_SESSION['user']=-1;
        ?>
            <div class="dropdown">
                <button class="btn dropdown-toggle" aria-hidden="true" id="user-choice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle"></i></button>
                <!-- <button class="btn dropdown-toggle" aria-hidden="true" id="user-choice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ngocnguyen</button> -->
                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="user-choice">
                    <a class="dropdown-item" href="{{route('login')}}">Sign in</a>
                    <a class="dropdown-item" href="{{route('signup')}}">Sign up</a>
                </div>
            </div>
        <?php }   ?>
    </nav>


</header>