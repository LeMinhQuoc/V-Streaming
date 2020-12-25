@extends('master')
@section('content')
    <div class="concept-wishlist">
        <img src="./public/images/wishlist.jpg" alt="">
    </div>
    <div class="text-center">
        <h1>Your collection</h1>
    </div>
    <div class="grid-display">
        <?php if(isset($wishlist)){?>


            @foreach($wishlist as $wl)
                
                <img src="{{$wl[0]->p_image}}">
                
              
          
           
            @endforeach

           <?php }else{?>
            
            <a href="{{route('login')}}">Login to add wishlist</a>

            <?php }?>
        
    </div>
@endsection