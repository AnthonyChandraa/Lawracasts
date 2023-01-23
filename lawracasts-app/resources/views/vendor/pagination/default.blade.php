@if ($paginator->hasPages())
    <div class="flex items-center text-white">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a class="hover:text-white text-gray-400  rounded-l rounded-sm   px-3 py-2 text-brand-dark hover:bg-brand-light no-underline"
                href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="  px-3 py-2 cursor-not-allowed no-underline">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="bg-gray-700 rounded-lg  mx-1 text-white  px-3 py-2 bg-brand-light no-underline">{{ $page }}</span>
                    @else
                        <a class=" bg-gray-900 rounded-lg hover:bg-gray-700 mx-1  px-3 py-2 hover:bg-brand-light text-brand-dark no-underline"
                            href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="hover:text-white text-gray-400 px-3 py-2 hover:bg-brand-light text-brand-dark no-underline"
                href="{{ $paginator->nextPageUrl() }}" rel="next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        @endif
    </div>
@endif
