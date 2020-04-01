@if ($paginator->hasPages())
    <nav>
        <ul class="flex justify-center list-none rounded my-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="relative block py-2 px-3 leading-tight bg-gray-300 border border-gray-300 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-gray-200 cursor-not-allowed">
                    <a class="cursor-not-allowed" href="#">Previous</a>
                </li>
            @else
                <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-gray-200">
                    <a href="{{ $paginator->previousPageUrl() }}">Previous</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 rounded-r hover:bg-gray-200">
                    <a href="{{ $paginator->nextPageUrl() }}">Next</a>
                </li>
            @else
                <li class="relative block py-2 px-3 leading-tight bg-gray-300 border border-gray-300 text-blue-700 rounded-r hover:bg-gray-200 cursor-not-allowed">
                    <a class="cursor-not-allowed" href="#">Next</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
