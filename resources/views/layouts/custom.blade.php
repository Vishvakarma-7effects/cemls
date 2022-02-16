@if ($paginator->hasPages())
   <nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
            <ul class="pagination justify-content-end">
        @if ($paginator->onFirstPage())
          

              <li class="page-item">
                <a class="page-link pn_arrow" href="#" aria-label="Previous">
                        <i class="fa fa-caret-left"></i>
                </a>
            </li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link pn_arrow" rel="prev"><i class="fa fa-caret-left"></i></a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link pn_arrow" rel="next"><i class="fa fa-caret-right"></i></a></li>
        @else
           <li class="page-item">

                        <a class="page-link pn_arrow" href="#" aria-label="Next">
                        <i class="fa fa-caret-right"></i>
                        </a>
                        </li>
        @endif
    </ul>
                        </nav>

@endif 




              
            

                      
                        
                           