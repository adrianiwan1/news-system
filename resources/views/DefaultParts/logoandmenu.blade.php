@section('logoandmenu')
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="/images/logo.png" alt="img" class="fh5co_logo_width"/>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="blog.html">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Single <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Contact_us.html">Contact <span class="sr-only">(current)</span></a>
                    </li>
                    @if ( isset(Auth::user()->rola) && Auth::user()->rola == 1)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Panel admina <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="{{route('dodajartykul')}}">Napisz artykuł</a>
                            <a class="dropdown-item" href="{{route('wszyscyurzytkownicy')}}">Wyświetl wszystkich użytkowników</a>
                            <a class="dropdown-item" href="#">Przejdź do pełnego panelu</a>
                        </div>
                    </li>
                    @endif
                    @auth
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/custom-logout')}}">Wyloguj się <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/custom-logout')}}">{{Auth::User()->login}} <span class="sr-only">(current)</span></a>
                    </li>
                    @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/login')}}">Zaloguj się <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/register')}}">Zarejestruj się <span class="sr-only">(current)</span></a>
                    </li>
                    @endauth
                    
                </ul>
            </div>
        </nav>
    </div>
</div>
@endsection