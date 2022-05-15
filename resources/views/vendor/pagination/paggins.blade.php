@if ($paginator->hasPages())
<div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
    <div class="col-12 text-center pb-4 pt-4">
        
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                
                    
                
            @else
                
                    <a class="btn_mange_pagging" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Poprzedni</a>
                
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="btn_mange_pagging">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="btn_pagging_picked">{{ $page }}</span>
                        @else
                            <a class="btn_pagging" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                
                    <a class="btn_mange_pagging" href="{{ $paginator->nextPageUrl() }}" rel="next">Następny <i class="fa fa-long-arrow-right"></i> </a>
                    
            @else
                
                   
                
            @endif
        
    </div>
</div>
@endif
