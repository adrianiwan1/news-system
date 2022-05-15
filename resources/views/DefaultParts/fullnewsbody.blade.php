@extends('default')
@include('DefaultParts.logoandmenu')
@include('DefaultParts.footer')

@section('newsbody')

    <body>
    
    @yield('logoandmenu')
       

                @yield('news')
                
                
        

    @yield('footer')
    <script src="js/jquery.stellar.min.js"></script>
    <script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>
    </body>
@endsection