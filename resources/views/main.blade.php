Główna Strona
@isset($baza)
@foreach($baza as $bazaEnd)
<div>
<h2>{{$bazaEnd->tytul}}</h2>
    <p>{{$bazaEnd->tresc}}</p>
    <img src="{{$bazaEnd->obrazek}}" alt="aa"> </img>
</div>

@endforeach
@endif