@extends('master')
@section('content')
<div class="container bootstrap snippets bootdey" style="margin-top: 150px">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>
                    Results found for <span class="text-navy">"{{$search_in}}"</span>
                    </h2>
                    <small>Request time  (0.23 seconds)</small>
{{--         
                    <div class="search-form">
                        <form action="#" method="get">
                            <div class="input-group">
                                <input type="text" placeholder="Bootdey" name="search" class="form-control input-lg">
                                <div class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> --}}

                    <div class="hr-line-dashed"></div>
                    @if(count($results))
                        @foreach ($results as $result)
                    <div class="row">
                        <img src="{{$result->p_image}}" alt="" style="height: 100px;width: 100px;">
                        <div class="col-10 search-result">
                            <h5><a href="detail/{{$result->id}}">{{$result->p_name}}</a></h5>
                            <a href="#" class="search-link">{{$result->p_link}}</a>
                            <p>
                                {{$result->p_sumary}}
                            </p>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                         @endforeach
                    @else 
                    <div>
                        <img src="./img/hmmm.png" alt="">
                        <span style="font-size: 50px">Let try another words!</span>
                    </div>
                    <div class="hr-line-dashed"></div>
                    @endif
                    
                    
                    {{-- <div class="text-center">
                        <div class="btn-group">
                            <button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-left"></i></button>
                            <button class="btn btn-white">1</button>
                            <button class="btn btn-white  active">2</button>
                            <button class="btn btn-white">3</button>
                            <button class="btn btn-white">4</button>
                            <button class="btn btn-white">5</button>
                            <button class="btn btn-white">6</button>
                            <button class="btn btn-white">7</button>
                            <button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-right"></i> </button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
                  
    
@endsection