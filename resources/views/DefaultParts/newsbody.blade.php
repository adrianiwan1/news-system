@extends('default')
@include('DefaultParts.logoandmenu')
@include('DefaultParts.footer')

@section('newsbody')

    <body>
    
    @yield('logoandmenu')
       
    <div class="container-fluid pb-4 pt-4">
            <div class="container paddding">
                <div class="row mx-0 animate-box" data-animate-effect="fadeInLeft">
                            <div>
                                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                            </div>
                </div>

                @yield('news')
                
            </div>
        </div>   
    </div>

    @yield('footer')

    </body>
@endsection