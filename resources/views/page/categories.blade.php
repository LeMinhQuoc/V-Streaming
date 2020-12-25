@extends('master')
@section('content')

<h4 class="background-pink font-weight-light p-md-3 m-0">TYPE: MOVIE</h4>
<p class="text-info font-weight-light p-md-3 m-0">{{count($datas)}}   result </p>
<div class="row p-md-3 m-1">
    @foreach($datas as $d)
    <div class="col-lg-4" style="width: 18rem;">
        <div class="container">
            <a href="detail/{{$d->id}}"><img src={{$d->p_image}} style="width:100%;height:350px;"></a>
            <p><a href="detail/{{$d->id}}"> {{$d->p_name}}</a></p>
        </div>
    </div>
    @endforeach

</div>
@endsection
<!-- /.row -->