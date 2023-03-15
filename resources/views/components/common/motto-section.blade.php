<div class="{{ $class }} pb-20 flex flex-row justify-center">
    <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
        <div class="flex flex-col justify-center lg:gap-12 md:gap-10 gap-6">
            <div class="flex flex-row justify-between items-center content-center">
                <p class="font-dm-sans text-xl text-partial relative">
                    {{ $headline }}
                </p>
                <div class="relative flex justify-center items-center">
                    <input type="checkbox" class="peer absolute w-full h-full p-0 m-0 opacity-0 z-10 cursor-pointer" />
                    <span
                        class="animate-ping absolute inline-flex h-8 w-8 rounded-full bg-[#d97373] transition-transform duration-500 opacity-75 peer-checked:opacity-0"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] transition-transform duration-500 opacity-100 peer-checked:opacity-0" viewBox="0 0 67 67">
                        <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0 -0.499)" fill="none"
                            stroke="#404040" strokeWidth="2">
                            <circle cx="33.5" cy="33.5" r="33.5" stroke="none" />
                            <circle cx="33.5" cy="33.5" r="32.5" fill="none" />
                        </g>
                        <path id="Icon_awesome-heart" data-name="Icon awesome-heart"
                            d="M25.483,3.187a7.538,7.538,0,0,0-10.286.75L14.111,5.056,13.025,3.937A7.537,7.537,0,0,0,2.74,3.187a7.915,7.915,0,0,0-.546,11.46L12.86,25.66a1.728,1.728,0,0,0,2.5,0L26.023,14.647a7.91,7.91,0,0,0-.54-11.46Z"
                            transform="translate(18.78 19.654)" fill="none"
                            stroke="#404040" strokeWidth="2" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-[50px] h-[50px] transition-transform duration-500 opacity-0 peer-checked:opacity-100" viewBox="0 0 67 67">
                        <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0 -0.499)" fill="none"
                            stroke="#404040" strokeWidth="2">
                            <circle cx="33.5" cy="33.5" r="33.5" stroke="none" />
                            <circle cx="33.5" cy="33.5" r="32.5" fill="none" />
                        </g>
                        <path id="Icon_awesome-heart" data-name="Icon awesome-heart"
                            d="M25.483,3.187a7.538,7.538,0,0,0-10.286.75L14.111,5.056,13.025,3.937A7.537,7.537,0,0,0,2.74,3.187a7.915,7.915,0,0,0-.546,11.46L12.86,25.66a1.728,1.728,0,0,0,2.5,0L26.023,14.647a7.91,7.91,0,0,0-.54-11.46Z"
                            transform="translate(18.78 19.654)" fill="#d97373"
                            stroke="#d97373" strokeWidth="2" />
                    </svg>
                </div>
            </div>
            <h2
                class="text-primary font-play-serif font-bold text-4xl lg:text-[80px] md:text-[64px] sm:text-[64px] leading-tight">
                {{ $title }}
            </h2>
            <div class="text-partial font-dm-sans font-normal text-sm lg:text-2xl md:text-xl sm:text-xl leading-8">
                {!! $content !!}
            </div>
        </div>
    </div>
</div>
