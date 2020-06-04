<!-- Pagination Source: https://tailwindcomponents.com/component/pagination-example -->
@if ($paginator->hasPages())
    <div class="flex flex-col items-center mt-12 mb-4">
        <div class="flex text-gray-700">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a href="#" class="h-12 w-12 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-not-allowed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-6 h-6">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="h-12 w-12 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer hover:bg-blue-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-6 h-6">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </a>
            @endif
            @php
                $start = $paginator->currentPage() - 1; // show 3 pagination links before current
                $end = $paginator->currentPage() + 1; // show 3 pagination links after current
                if($start < 1) {
                    $start = 1; // reset start to 1
                    $end += 1;
                }
                if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
            @endphp
            <div class="flex h-12 font-medium rounded-full bg-gray-200">
                @for ($i = $start; $i <= $end; $i++)
                    @if ($paginator->currentPage() == $i)
                        <a href="#" class="w-12 md:flex justify-center items-center hidden cursor-not-allowed leading-5 transition duration-100 ease-in rounded-full bg-blue-500 text-white">{{$i}}</a>
                    @else
                        <a href="{{ $paginator->url($i) }}" class="w-12 md:flex justify-center items-center hidden cursor-pointer leading-5 transition duration-100 ease-in rounded-full hover:bg-blue-400 hover:text-white">{{$i}}</a>
                    @endif
                @endfor
            </div>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="h-12 w-12 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer hover:bg-blue-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-6 h-6">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            @else
                <a href="" class="h-12 w-12 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-not-allowed hover:bg-blue-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-6 h-6">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            @endif
        </div>
    </div>
@endif