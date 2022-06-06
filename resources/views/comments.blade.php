@section('comments')
@foreach($komentarze as $kom)

                    </br>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div>
                            <span class="d-block fh5co_small_post_heading">{{$kom->login}}</span>
                            <div class="c_g"><i class="fa fa-clock-o"></i> {{$kom->data}}</div>
                            </div>
                            <div>
                                <span class="d-block fh5co_small_post_heading">{!!$kom->tresc!!}</span>
                                <div class="c_g"><i class="fa"></i> Ocena: {{$kom->ocena}}</div>
                                @if ( isset(Auth::user()->rola) && Auth::user()->rola == 1)
                                <form method="POST" action="{{route('usunkomentarz')}}">
                                @csrf
                                    <input type="hidden" name="data" value="{{$kom->data}}">
                                    <input type="hidden" name="komentarzeID" value="{{$kom->komentarzeID}}">
                                    <input type="hidden" name="url" value="{{Request::url()}}">
                                    <input type="submit" class="btn_pagging" value="usuń komentarz">
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach  
@endsection