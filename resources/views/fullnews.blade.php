@extends('DefaultParts.fullnewsbody')
@section('news')
@foreach($aa as $aa)
<body class="single">
<div id="fh5co-title-box" style="background-image: url({{$aa->obrazek}}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <span>{{$aa->login}}</span>
        <h2>{{$aa->tytul}}</h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">

                <!--
                    // TODO: zawartość artykułu, wczytać ją z bazy danych

                -->
                    {{$aa->tresc}}
                <!--
                    //TODO: koniec artykułu
                -->
            </div>
        </div>
    </div>
</div>
@endforeach
</body>
@endsection