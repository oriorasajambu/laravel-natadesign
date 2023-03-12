@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between mt-20">
        <div class="flex justify-center flex-1">
            <span class="relative z-0 inline-flex gap-3">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center py-2" aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                        <span class="relative inline-flex items-center px-2 py-2" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.144" height="14.382"
                                viewBox="0 0 25.144 14.382">
                                <g id="Group_376" data-name="Group 376" transform="translate(-578.793 -2186.809)">
                                    <path id="Path_267" data-name="Path 267" d="M0,6.837,6.837,0l6.837,6.837"
                                        transform="translate(579.5 2200.837) rotate(-90)" fill="none"
                                        stroke="#404040" stroke-width="1" />
                                    <path id="Path_268" data-name="Path 268" d="M1208.8,3931.5h-24.437"
                                        transform="translate(1788.301 6125.5) rotate(180)" fill="none"
                                        stroke="#404040" stroke-width="1" />
                                </g>
                            </svg>
                        </span>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        class="relative inline-flex items-center px-2 py-2"
                        aria-label="{{ __('pagination.previous') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.144" height="14.382"
                            viewBox="0 0 25.144 14.382">
                            <g id="Group_376" data-name="Group 376" transform="translate(-578.793 -2186.809)">
                                <path id="Path_267" data-name="Path 267" d="M0,6.837,6.837,0l6.837,6.837"
                                    transform="translate(579.5 2200.837) rotate(-90)" fill="none"
                                    stroke="#404040" stroke-width="1" />
                                <path id="Path_268" data-name="Path 268" d="M1208.8,3931.5h-24.437"
                                    transform="translate(1788.301 6125.5) rotate(180)" fill="none"
                                    stroke="#404040" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span>{{ $element }}</span>
                        </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 -ml-px font-dm-sans font-bold border-2 border-partial rounded-sm bg-primary text-white">{{ $page }}</span>
                                </span>
                            @else
                                <a href="{{ $url }}"
                                    class="relative inline-flex items-center px-4 py-2 -ml-px font-dm-sans font-bold border-2 border-partial rounded-sm bg-[#FFFBF2] text-primary"
                                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                        class="relative inline-flex items-center px-2 py-2 -ml-px"
                        aria-label="{{ __('pagination.next') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.144" height="14.382"
                            viewBox="0 0 25.144 14.382">
                            <g id="Group_393" data-name="Group 393" transform="translate(-796.063 -2186.809)">
                                <path id="Path_265" data-name="Path 265" d="M0,6.837,6.837,0l6.837,6.837"
                                    transform="translate(820.5 2187.163) rotate(90)" fill="none" stroke="#404040"
                                    stroke-width="1" />
                                <path id="Path_266" data-name="Path 266" d="M1208.8,3931.5h-24.437"
                                    transform="translate(-388.301 -1737.5)" fill="none" stroke="#404040"
                                    stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                @else
                    <span class="relative inline-flex items-center py-2" aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                        <span class="relative inline-flex items-center px-2 py-2 -ml-px" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.144" height="14.382"
                                viewBox="0 0 25.144 14.382">
                                <g id="Group_393" data-name="Group 393" transform="translate(-796.063 -2186.809)">
                                    <path id="Path_265" data-name="Path 265" d="M0,6.837,6.837,0l6.837,6.837"
                                        transform="translate(820.5 2187.163) rotate(90)" fill="none"
                                        stroke="#404040" stroke-width="1" />
                                    <path id="Path_266" data-name="Path 266" d="M1208.8,3931.5h-24.437"
                                        transform="translate(-388.301 -1737.5)" fill="none" stroke="#404040"
                                        stroke-width="1" />
                                </g>
                            </svg>
                        </span>
                    </span>
                @endif
            </span>
        </div>
    </nav>
@endif
