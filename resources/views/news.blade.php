@extends('DefaultParts.newsbody')
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
            <a href="{{url('article',$bazaEnd->artykulyID)}}" class="fh5co_magna py-2"> {{$bazaEnd->tytul}}</a> 
            <div>
            <a class="fh5co_mini_time py-3"> {{$bazaEnd->login}} -
            {{$bazaEnd->dataPublikacji}}</a>
        </div>
            <div class="fh5co_consectetur"> {{\Illuminate\Support\Str::limit($bazaEnd->tresc,500, $end='...')}}
            </div>
        </div>
    </div>
    @endforeach
    @endif
    {!! $baza->links('vendor.pagination/paggins')!!}
    
@endsection