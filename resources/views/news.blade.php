@extends('default')
@isset($baza)



@section('news')
@foreach($baza as $bazaEnd)
<div class="row pb-4">
    <div class="col-md-5">
        <div class="fh5co_hover_news_img">
            <div class="fh5co_news_img"><img src="{{$bazaEnd->obrazek}}" alt=""/></div>
            <div></div>
        </div>
    </div>
    <div class="col-md-7 animate-box">
        <a href="single.html" class="fh5co_magna py-2"> {{$bazaEnd->tytul}} </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
        {{$bazaEnd->dataPublikacji}}</a>
        <div class="fh5co_consectetur"> {{\Illuminate\Support\Str::limit($bazaEnd->tresc,500, $end='...')}}
        </div>
    </div>
</div>
@endforeach
@endif
@endsection