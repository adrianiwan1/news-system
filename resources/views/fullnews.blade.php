@extends('DefaultParts.fullnewsbody')
@include('comments')
@section('news')
@foreach($aa as $aa)
<body class="single">
<div id="fh5co-title-box" style="background-image: url({{url('/','storage/'.$aa->obrazek)}}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <span>{{$aa->login}}</span>
        <span>{{$aa->dataPublikacji}}</span>
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
                    {!!$aa->tresc!!}
                   
                <!--
                    //TODO: koniec artykułu
                -->
                <div>
                @if ( isset(Auth::user()->rola) && Auth::user()->rola == 1)
                                <form method="POST" action="{{route('usunartykul')}}">
                                @csrf
                                    <input type="hidden" name="data" value="{{$aa->dataPublikacji}}">
                                    <input type="hidden" name="artykulyID" value="{{$aa->artykulyID}}">
                                    <input type="submit" class="btn_pagging" value="usuń artykul">
                                </form>
                                @endif
                                @endforeach
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5 animate-box">
    <div class="container">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Komentarze</div>
        </div>
                <div id='comments'>
                @yield('comments')
                </div>
                @auth
                    
                    <div class="container-fluid pb-4 pt-5">
                        <div class="container">
                            <div>
                                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Napisz komentarz</div>
                                <form method="POST" action="{{route('zapiszkomentarz')}}" id='dodajkomentarz'>
                                @csrf
                                    <input type="hidden" name="data" value="{{now()}}">
                                    <input type="hidden" name="uzytkownicyID" value="{{Auth::id()}}">
                                    <input type="hidden" name="artykul" value="{{$aa->artykulyID}}">
                                    <input type="hidden" name="url" value="{{Request::url()}}">
                                    <textarea  class="form-control" rows="5" cols="60"  name="tresc"></textarea><br>
                                    <input type="button" id="subm" class="btn_pagging" value="dodaj komentarz">
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    @endauth    
    </div>
</div>
<script>
    const x = document.querySelector('#dodajkomentarz')
    const y = document.querySelector('#subm')
    const z = document.querySelector('#comments')

    function submitform()
    {
        const data = new FormData(x);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "{{route('zapiszkomentarz')}}");
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200)
            {
                const xhr=new XMLHttpRequest();
                xhr.open('GET',"/api/{{$aa->artykulyID}}")
                xhr.onreadystatechange=function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        z.innerHTML=this.responseText
                    }
                }
                xhr.send()
            }   
        }
        xhr.send(data); 
    }
    y.addEventListener("click",submitform)
    </script>
</body>
@endsection