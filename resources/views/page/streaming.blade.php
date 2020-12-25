@extends('master')
@section('content')

<!-- Product grid -->
{{-- <div class="container p-md-3"> --}}
{{-- {{  public_path('css/app.css') }} --}}
    {{-- <div class="col-lg-12">
        <h1 class="font-weight-light">Title of this film</h1>
        <hr class="hr-custom">
        <div class="row p-md-3">
          @if( $_SESSION["user"]==0)
          <div class="col-lg-12">
            <video class="video-fluid z-depth-1 col-md-12" loop controls muted>
                <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" type="video/mp4" />
            </video>
            <div class="flex-right">
              <div class="btn-group" role="group">
               <button class="heart" > <a href='wishlist\{{$phim[0]->id}}'>
                   <i class="fas fa-heart"></i>
                   </a>
                </button>
                <button type="button" class="watch-later"><i class="fas fa-history"></i></button>
                <button type="button" class="download"><i class="fas fa-download"></i></button>
              </div>
            </div>
          </div>
          @else
            <div class="col-lg-9">
             <video class="video-fluid z-depth-1 col-md-12" loop controls muted>
                <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" type="video/mp4" />
              </video>
              <div class="flex-right">
                <div class="btn-group" role="group">
                  <button class="heart" > <a href='../wishlist/{{$phim[0]->id}}'>
                   <i class="fas fa-heart"></i>
                   </a>
                </button>
                  <button type="button" class="watch-later"><i class="fas fa-history"></i></button>
                  <button type="button" class="download"><i class="fas fa-download"></i></button>
                </div>
            </div>
          </div>
            
                <div class="col-lg-3">
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
        <!-- end card -->
    </div>
     --}}
    {{-- <label class="font-weight-bold" for="episode">Episode: </label>
    <nav id="episode" aria-label="">
        <ul class="pagination pagination-md">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
    <!-- comments -->
    <div class=" text-black  my-5 py-4">
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
                        <i onclick="Reply({{$i}})" class="fa fa-reply" style="color: aqua" aria-hidden="true">Reply</i>
                        @if( $_SESSION["user"]==0)
                        <i href="..\deleteComment\{{$c->id}}" class="fa fa-times" style="color: red" aria-hidden="true">Delete</i>
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
    <h2 class="background-pink font-weight-light m-2">Maybe you like</h2>
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
 
</div> --}}
<!-- end comments row -->

<!-- Content Row -->

<!-- /.row -->
<main>
   
    <div class="row">
        <div class="col-9">
            <video controls>
                <source src="../img/spider-man.mp4" type="video/mp4">
              </video>
              <div id="option">
                <button class="back-button"><i class="fas fa-chevron-left"></i></button>
                <button class="flag-button"><i class="far fa-flag"></i></button>
                <a href='../wishlist/{{$phim[0]->id}}'><button class="like-button"><i class="fas fa-heart"></i></button></a>
               
              </div>
              
        </div>
        <div class="col-3">
            <div class="header-box">
                <h5>Chat on</h5>
                {{-- <img src="..{{$users->avatar}}"> --}}
                <img src="../public/images/mot.jpg" alt="">
            </div>
            <div class="body-box">
                <?php $i=0;?>
                 @foreach($comments as $c)
                <div class="comment">
                    <img src="..{{$c->user[0]->avatar}}" alt="" style="height: 50px; width: 50px">
                    <div class="dialogbox">
                        <div class="body">
                          <span class="tip tip-left"></span>
                          <div class="message">
                              <b>{{$c->user[0]->name}}</b><br>
                            <span>{{$c->comment}}&nbsp</span>
                            @if( $_SESSION["user"]==0)
                            <a href="..\deleteComment\{{$c->id}}" class="fa fa-times" style="color: red" aria-hidden="true"></a>
                            @endif 
                          </div>
                          <div class="comment-box">
                            
                        </div>
                        </div>
                      </div>
                </div>
                @if(count($c['reply'])>0)
                @foreach($c['reply'] as $re)
                <div style="padding: 5px;margin-left: 40px;">
                    
                    <div class="comment">
                        <img src="..{{$re['user']->avatar}}" alt="" style="height: 50px; width: 50px">
                        <div class="dialogbox">
                            <div class="body">
                              <span class="tip tip-left"></span>
                              <div class="message">
                                  <b>{{$re['user']->name}}</b><br>
                                <span>{{$re->re_comment}}</span>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                @endforeach
                @endif
                <div id={{$i}} class="w-100">
                    <form action="{{route('reply')}}" method="post">
                        @csrf
                        <input type="" hidden="" name="c_id" value={{$c->id}}>
                        <input type="" hidden="" name="u_id" value={{$_SESSION['user']}}>
                        <input type=""  name="re_comment" >
                        <button>Reply</button>
                    </form>
                </div>
                @endforeach
                {{-- <div class="comment">
                    <img src="../public/images/ba.jpg" alt="" style="height: 50px; width: 50px">
                    <div class="dialogbox">
                        <div class="body">
                          <span class="tip tip-left"></span>
                          <div class="message">
                              <b>Ngoc nguyen</b><br>
                            <span>Hi there.</span>
                          </div>
                        </div>
                      </div>
                </div> --}}
                
            </div>
            <div class="footer-box">
                <form action="{{ route('addComment') }}" method="post">
                    @csrf
                    <div class="d-flex form-group">
                        <input type="" hidden="" name="u_id" value={{$_SESSION['user']}}>
                        <input type="" hidden="" name="p_id" value={{$phim[0]->id}}>
                        <input class="form-control" type="text" name="comment" placeholder="Leave your comment">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="ml-200">
        <h4><span>&nbspWe recommend you to see</span></h4>
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