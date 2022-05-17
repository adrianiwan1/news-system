@extends('default')
@include('DefaultParts.logoandmenu')
@include('DefaultParts.footer')

@section('newsbody')

    <body>
    
    @yield('logoandmenu')
       
    

                @yield('news')
                
          

    @yield('footer')

    </body>
@endsection