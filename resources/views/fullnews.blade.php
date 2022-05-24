@extends('DefaultParts.fullnewsbody')
@section('news')
@foreach($aa as $aa)
<body class="single">
<div id="fh5co-title-box" style="background-image: url({{url('/',$aa->obrazek)}}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
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
<div class="container-fluid pb-4 pt-5 animate-box">
    <div class="container">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Komentarze</div>
        </div>
                    @foreach($komentarze as $komentarze)
                    </br>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div>
                            <span class="d-block fh5co_small_post_heading">{{$komentarze->login}}</span>
                            <div class="c_g"><i class="fa fa-clock-o"></i> {{$komentarze->data}}</div>
                            </div>
                            <div>
                                <span class="d-block fh5co_small_post_heading">{{$komentarze->tresc}}</span>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @auth
                    <div class="container-fluid pb-4 pt-5">
                        <div class="container">
                            <div>
                                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Napisz komentarz</div>
                                <span> TUTAJ BEDZIE FORM DO KOMENTARZY</span>
                            </div>
                        </div>
                    </div>
                    @endauth
    </div>
</div>
@endforeach
</body>
@endsection