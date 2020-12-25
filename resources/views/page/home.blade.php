@extends('master')
@section('content')




<!-- Product grid -->

{{-- <div class="slideshow-container">
    @foreach ($slide as $sl)
    <div class="mySlides">
        <!-- <div class="numbertext">1 / 3</div> -->
        <a href="detail/{{$sl->id}}"><img src={{$sl->p_image}} style="width:100%;height: 450px;"></a>
        <div class="text"><p>{{$sl->p_name}}</p></div>
    </div>
    @endforeach

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<div class="p-md-3">
    <h5 class="font-weight-light">Have just updated</h5>
    <hr class="hr-custom">
</div>

<div class="row w3-grayscale">

    @foreach ($phim as $phim)
    <div class="col-3">
        <div class="container">
            <a href="detail/{{$phim->id}}"><img src={{$phim->p_image}} style="width:100%;height:300px;"></a>
            <p class="film-name"><a href="detail/{{$phim->p_id}}">{{$phim->p_name}}</a></p>
        </div>
    </div>
    @endforeach
</div>

<!-- Subscribe section -->
<div class="w3-container w3-black w3-padding-32">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
</div>  --}}
<main>
    <?php 
   
    $j=count($phim);
    $i=0;
    $slide=array();
    foreach($phim as $article ): 
    if($j<=3){
        array_push($slide, $phim[$i] );
        }
    $i++;
    $j--;
    endforeach;
?>
    <div class="slide-contain">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach( $slide as $sl )
                   <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
               </ol>
            <div class="carousel-inner">
                @foreach ($slide as $sl)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{$sl->p_image}}" class="d-block w-100" alt="...">
                    <div class="movie-infor">
                    <h2>{{$sl->p_name}}</h2>
                    <p class="intro">{{$sl->p_sumary}}</p>
                        <div class="combo-button">
                            <a href="detail/{{$sl->id}}"><button class="orange-button"><i class="fas fa-play"></i>&nbspWATCH</button></a>
                            <button class="black-button"><i class="fas fa-plus"></i>&nbspADD</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
      
    <div class="ml-200">
        <h4><span><i class="fas fa-fire"></i>&nbspMost popular</span></h4>
        <div class="text-center">
            @foreach ($type as $loai)
                <button style="background: #faac37">{{$loai->type}}</button>
            @endforeach 
            <button>Romantic</button>  
            <button>Historical</button>  
            <button>Horror</button>  
            <button>Detective</button>  
        </div>
    </div>


    <div class="ml-200">
        <h4><span><i class="fas fa-plus"></i>&nbspRecentely added</span></h4>
    </div>
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": 1500, "pauseAutoPlayOnHover": false, "fullscreen": true, "pageDots": false }'>
        @foreach ($phim as $film)
        <a href="detail/{{$film->id}}"><img src="{{$film->p_image}}" alt="" class="carousel-cell"></a>
        @endforeach
    </div>

    <div class="ml-200">
        <h4><span><i class="fas fa-chart-line"></i>&nbspTrending</span></h4>
    </div>
    <div class="carousel" data-flickity='{ "wrapAround": true, "pauseAutoPlayOnHover": false, "fullscreen": true, "pageDots": false }'>

        <img src="{{asset('public/images/mot.jpg')}}" alt="" class="carousel-cell">
        <img src="{{asset('public/images/hai.jpg')}}" alt="" class="carousel-cell">
        <img src="{{asset('public/images/ba.jpg')}}" alt="" class="carousel-cell">
        <img src="{{asset('public/images/bon.jpeg')}}" alt="" class="carousel-cell">
        <img src="{{asset('public/images/nam.jpg')}}" alt="" class="carousel-cell">
        <img src="{{asset('public/images/sau.jpg')}}" alt="" class="carousel-cell">
        <img src="{{asset('public/images/bay.jpg')}}" alt="" class="carousel-cell">
        <img src="{{asset('public/images/tam.jpg')}}" alt="" class="carousel-cell">
        

    </div>
</main>
<!-- Login modal -->
{{-- <div class="container">
    <div class="modal left fade" id="signinModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>Sign in</h2>
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phonenumber">

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                        <hr>
                        <div class="form-group">
                            <a href="#">Set new password</a><br>
                            <a href="#" data-toggle="modal" data-target="#signupModal">or Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- sign up modal -->
{{-- <div class="container">
    <div class="modal left fade" id="signupModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>Sign up</h2>
                    <form method="post" action="{{route('postsignup')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="pwd">
                        </div>
                        <div class="form-group">
                            <label for="repassword">Password repeat</label>
                            <input type="password" class="form-control" id="repassword" placeholder="Password repeat" name="repwd">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree with Term of service</label>
                        </div>
                        <button type="submit" class="btn btn-primary" href="{{route('postsignup')}}">DONE</button>
                        <hr>
                        <div class="form-group">
                            <a href="#">Sign in here</a>
                        </div>
                    </form>
                    <div>
                        @include('block.error')
                         @if(isset($user))
                            <p>Name: {{$user['name']}}</p>
                            <p>Phone number: {{$user['phone']}}</p>
                            <p>Password: {{$user['password']}}</p>
                            <p>Password-repeat: {{$user['repassword']}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection