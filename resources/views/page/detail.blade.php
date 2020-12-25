@extends('master')
@section('content')

{{-- <!-- Product grid -->
<div class="container p-md-3">
    <div class="col">
        <h1 class="font-weight-light">{{$phim[0]->p_name}}</h1>
        <hr class="hr-custom">
        <!-- Heading Row -->
        
        <div class="row  p-md-3">
            @if( $_SESSION["user"]==0)
            <div class="col-lg-6">
                <img class="mb-4 mb-lg-0" src=.{{$phim[0]->p_image}} style="height:250px;width:100%;"
                    alt="">
                <div width="100%">
                    <div class="form-group btn-group-lg" role="group" >
                        <button type="button" class="btn btn-success">Trailer</button>
                        <a href="..\streaming\{{$phim[0]->id}}" type="button" class="btn btn-danger">Watch
                            online</a>
                        <button type="button" class="btn btn-primary">Download</button>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="scroll-infor">
                    <label for="release" class="font-weight-bold">Released</label>
                    <p id='release'>{{$phim[0]->p_released_year}}</p>
                    <label class="font-weight-bold">Director</label>
                    <p>{{$phim[0]->p_director}}</p>
                    <label class="font-weight-bold">Nation</label>
                    <p>{{$phim[0]->p_nation}}</p>
                    <label class="font-weight-bold">Genre</label>
                    <p></p>
                    <label class="font-weight-bold">Overview</label>
                    <p class="overview">{{$phim[0]->p_sumary}}</p>
                    <a onclick="showOverview()">more>></a>
                </div>
            </div>
            @else
             <div class="col-lg-4">
                <img class="mb-4 mb-lg-0" src=.{{$phim[0]->p_image}} style="height:250px;width:100%;"
                    alt="">
                <div width="100%">
                    <div class="form-group btn-group-lg" role="group" >
                        <button type="button" class="btn btn-success">Trailer</button>
                        <a href="..\streaming\{{$phim[0]->id}}" type="button" class="btn btn-danger">Watch
                            online</a>
                        <button type="button" class="btn btn-primary">Download</button>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-4 white" >
                <div class="scroll-infor">
                    <label for="release" class="font-weight-bold">Released</label>
                    <p id='release'>{{$phim[0]->p_released_year}}</p>
                    <label class="font-weight-bold">Director</label>
                    <p>{{$phim[0]->p_director}}</p>
                    <label class="font-weight-bold">Nation</label>
                    <p>{{$phim[0]->p_nation}}</p>
                    <label class="font-weight-bold">Genre</label>
                    <p>@foreach($types as $type) 
                         {{$type['name']}} </br>
                     @endforeach</p>
                    <label class="font-weight-bold">Overview</label>
                    <p class="overview">{{$phim[0]->p_sumary}}</p>
                    <a onclick="showOverview()" style="color: aqua">more>></a>
                </div>
            </div>
            <div class="col-lg-4">
                <b style="">Wishlist</b>
                <hr class="hr-custom">
                <div class="scroll-infor">
                <?php if(isset($wishlist)){?>


                @foreach($wishlist as $wl)
                <div style="margin: 5px;">
                    <img src=.{{$wl[0]->p_image}} style="height: 30px;width: 30px;">
                    <b>{{$wl[0]->p_name}}</b>
                </div>
               
                @endforeach

               <?php }else{?>
                
                <a href="{{route('login')}}">Login to add wishlist</a>

                <?php }?>
                 </div>
            </div>
            @endif
        </div>
       
        <!-- overview -->
        <div id="overview" style="display: none;">
            <h2 class="font-weight-light p-md-1 mr-2">Overview</h2>
            <hr class="hr-custom">
            <div id="detail" class="">
                <img class="mb-4 mb-lg-0" src=.{{$phim[0]->p_image}} style="height:250px;width:100%">
                <p><b>{{$phim[0]->p_name}}: </b>{{$phim[0]->p_sumary}}</p>
            </div>
            <i class="fa fa-chevron-up" onclick="closeOverview()" aria-hidden="true" style="color: yellow"></i>
        </div>

        <!-- actor card -->
        <div id="actor">
            <h2 class="font-weight-light p-md-1 mr-2">Actor/Actress</h2>
            <hr class="hr-custom">
            <div class="card-deck p-md-3">
               <?php $i=0; ?>
                @foreach($actor_ar as $ar)
                <div class="col-md-2">
                    <img style="height: 100px; width: 100px" src="..{{$ar[0]->avt}}">
                    <div class="actor-info">
                            <h5 class="card-title">{{$ar[0]->name}}</h5>
                            <!-- <div class="cardtext"><b>Name:</b> <b>{{$ar[0]->name}}</b></div>
                            <b class="cardtext" ><div>Nation:</div> <div>{{$ar[0]->country}}</div></b>
                            <b class="cardtext"><div>Date of birth:</div><div>{{$ar[0]->dob}}</div></b>
                            <b class="cardtext"><div>Role: </div><div>{{$actor_ar[$i]['role']}}</div></b> -->
                            <b style="color: lightgreen">{{$actor_ar[$i]['role']}}</b>
                    </div>
                </div>
                 <?php $i++; ?>
                @endforeach  
            </div>
        </div>
    </div>
    <!-- end card -->

    <!-- comments -->
    <div class="text-black  my-5 py-4">
         <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#comments">Comments</a></li>
            <li><a data-toggle="tab" href="#rating">Rating</a></li>
        </ul>
        <div class="tab-content">
            <div id="comments" class="scroll-control tab-pane in active">
                <?php $i=0;?>
                 @foreach($comments as $c)
                <div class="box2">
                    <div class="comment-box">
                        <div class="box1">
                            <img src="..{{$c->user[0]->avatar}}">
                        </div>
                        <div class="box2">
                            <b>{{$c->user[0]->name}}</b>
                            <i>{{$c->comment}}</i>
                        </div>
                    </div>
                    <div class="comment-box">
                        <i onclick="Reply({{$i}})" class="fa fa-reply" style="color: #6574cd" aria-hidden="true">Reply</i>
                        @if( $_SESSION["user"]==0)
                        <a href="..\deleteComment\{{$c->id}}" class="fa fa-times" style="color: red" aria-hidden="true">Delete</a>
                        @endif 
                    </div>
                </div>
                @if(count($c['reply'])>0)
                @foreach($c['reply'] as $re)
                <div style="padding: 5px;margin-left: 40px;">
                    <div class="box2">
                        <div class="comment-box">
                            <div class="box1">
                                <img src="..{{$re['user']->avatar}}">
                            </div>
                            <div class="box2">
                                <b>{{$re['user']->name}}</b>
                                <i>{{$re->re_comment}}</i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <div id={{$i}} >
                    <form action="{{route('reply')}}" method="post">
                        @csrf
                        <input type="" hidden="" name="c_id" value={{$c->id}}>
                        <input type="" hidden="" name="u_id" value={{$_SESSION['user']}}>
                        <input type=""  name="re_comment" >
                        <button>Reply</button>
                    </form>
                </div>
                @endforeach
            </div>
            <div id="rating" class="tab-pane fade" style="height: 250px;">
                <h4>Rating: 3.2/5</h4>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <hr class="m-0" style="height:1px;border-width:0;color:color: white;background-color: white">
        <form action="{{ route('addComment') }}" method="post">
            @csrf
            <div class="d-flex">
                <input type="" hidden="" name="u_id" value={{$_SESSION['user']}}>
                <input type="" hidden="" name="p_id" value={{$phim[0]->id}}>
                <input type="text" class="p-2 w-100" name="comment" placeholder="Write something...">
                <button type="submit"><i class="fa fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
    <h2 class="font-weight-light p-md-1 mr-2">Maybe you like</h2>
    <hr class="hr-custom">
    <div class="row">

        @foreach ($film as $film)
        <div class="col-3">
            <div class="container">
                <a href="../detail/{{$film->id}}"><img src=.{{$film->p_image}} style="width:100%;height:300px;"></a>
                <p class="film-name"><a href="../detail/{{$film->id}}">{{$film->p_name}}</a></p>
            </div>
        </div>
        @endforeach
    </div>
        <!-- /.col-md-4 -->

</div>
<!-- end comments row --> --}}

<main>
    <div class="row">
        <div class="col-5">
            <img src=".{{$phim[0]->p_image}}">
            <a href="..\streaming\{{$phim[0]->id}}"><button class="play-button" style="text-overflow:clip;"><i class="fas fa-play"></i>&nbspPLAY</button></a>
        </div>
        <div class="col-7">
            <div class="d-flex justify-content-between">
                <h1 class="float-left">{{$phim[0]->p_name}}</h1>
                <h5 class="float-right">9.0<span class="fa fa-star checked" style="color: #EFCA17;"></span></h5>
            </div>
            <small>{{$phim[0]->p_released_year}} | 2h30m | 18+</small>
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin: 30px 0;">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="home" aria-selected="true">OVERVIEW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#trailer" role="tab" aria-controls="profile" aria-selected="false">TRAILERS & MORE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="contact" aria-selected="false">DETAIL</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="home-tab">
                    <p>{{$phim[0]->p_sumary}}</p>
                    <div class="gridDisplay">
                        <b>Starring</b>
                        <?php $i=0; ?>
                        <p>
                             @foreach($actor_ar as $ar)
                       
                                    {{$ar[0]->name}}|
                         
                        <?php $i++; ?>
                        @endforeach  
                        </p>
                       
                    </div>
                    <div class="gridDisplay">
                        <b>Created by</b>
                        <p>{{$phim[0]->p_director}}</p>
                    </div>
                    <div class="gridDisplay">
                        <b>Genre</b>
                        <p>@foreach($types as $type) 
                            {{$type['name']}} |
                        @endforeach</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="trailer" role="tabpanel" aria-labelledby="profile-tab">
                    <video controls style="height: 300px; white: 500px;">
                        <source src="../img/spider-man.mp4" type="video/mp4">
                      </video>
                    <p>Thrilled by his experience with the Avengers, Peter returns home, where he lives with his Aunt May, under the watchful eye of his new mentor Tony Stark, Peter tries to fall back into his normal daily routine - distracted by thoughts of proving himself to be more than just your friendly neighborhood Spider-Man - but when the Vulture emerges as a new villain, everything that Peter holds most important will be threatened. Written by Benett Sullivan.</p>
                </div>
                <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="contact-tab">
                    <p><b>Official Sites: </b> <a href="">Marvel [United States]</a> | <a href="">Official Facebook</a> | <a href=""> more »</a></p>
                    <p><b>Country: </b> <a href="">USA</a> </p>
                    <p><b>Language: </b> <a href="">English </a> |<a href=""> Spanish</a> </p>
                    <p><b>Release Date: </b> <a href="">7 July 2017 (Vietnam) </a> |<a href=""> See more »</a> </p>
                    <p><b>Also Known As: </b> <a href="">Người Nhện: Trở Về Nhà </a> |<a href=""> See more »</a> </p>
                    <p><b>Filming Locations: </b> <a href=""> Atlanta, Georgia, USA </a> |<a href=""> See more »</a> </p>
                  
                </div>
            </div>
            <h5>Related movie</h5>
            <div class="related" data-flickity='{ "wrapAround": true, "pauseAutoPlayOnHover": false, "fullscreen": true, "pageDots": false }'>
                @foreach ($film as $film)
                    <img src=".{{$film->p_image}}" alt="" class="related-cell">
                @endforeach
                
            </div>
        </div>
    </div>
    <div class="ml-200">
        <h3><span>You might like</span></h3>
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
@endsection