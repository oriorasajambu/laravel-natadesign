<div class="flex flex-col gap-6">
    <div class="grid grid-cols-3 xs:grid-cols-1 w-full lg:gap-x-6 md:gap-x-6 sm:gap-x-6 ssm:gap-x-8 xs:gap-x-8 lg:gap-y-12 md:gap-y-16 sm:gap-y-16 ssm:gap-y-16 xs:gap-y-16 lg:mt-20 mt-10">
        @foreach ($albums as $album)
            <a aria-label={{ $album->title }} href="/portofolio/{{ $album->slug }}">
                <div class="flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <h2 class="lg:text-2xl md:text-xl text-partial font-dm-sans font-bold truncate mb-1">
                            {{ $album->title }}
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-partial" width="25.144" height="14.382"
                            viewBox="0 0 25.144 14.382">
                            <g id="Component_1_63" data-name="Component 1 – 63" transform="translate(0 0.354)">
                                <path id="Path_19" data-name="Path 19" d="M0,6.837,6.837,0l6.837,6.837"
                                    transform="translate(24.437) rotate(90)" fill="none" stroke="#404040"
                                    strokeWidth="1" />
                                <path id="Path_20" data-name="Path 20" d="M1208.8,3931.5h-24.437"
                                    transform="translate(-1184.364 -3924.663)" fill="none" stroke="#404040"
                                    strokeWidth="1" />
                            </g>
                        </svg>
                    </div>
                    <div class="flex-row justify-between text-partial text-base font-dm-sans mb-3">
                        <p>{{ isset($album->cover->alt) ? $album->cover->alt : $album->title }}</p>
                    </div>
                    <img src="{{ isset($album->cover->image) ? 'https://admin.natadesign.id/' . $album->cover->image : asset('assets/favicon.svg') }}"
                        class="basis-[19%] relative w-full grow aspect-square self-center" loading="lazy"
                        alt="{{ isset($album->cover->alt) ? $album->cover->alt : $album->title }}" />
                </div>
            </a>
        @endforeach
    </div>
</div>
