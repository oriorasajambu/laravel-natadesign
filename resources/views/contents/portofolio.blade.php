@extends('layout')
@section('head')
    <x-custom-head-component :seo="$seo" />
@endsection
@section('content')
    <div class="flex flex-col justify-start">
        <div class="w-full flex flex-row justify-center bg-primary">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] flex flex-col justify-between">
                <x-top-bar-component class="bg-primary" />
            </div>
        </div>
        <div class="w-full flex flex-row justify-center bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <div class="grid grid-flow-row">
                    <div class="flex flex-row justify-between items-center py-14">
                        <x-common.subtitle-component class="uppercase text-primary">
                            {{ $album->title }}
                        </x-common.subtitle-component>
                    </div>
                    <x-common.divider-x-component />
                    <div
                        class="items overflow-x-scroll hide-scrollbar overflow-y-hidden flex flex-nowrap gap-x-6 pt-20 pb-1 m-0">
                        <div class="lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                            <img src="{{ asset('assets/Asset_1.png') }}" alt="" class="select-none" />
                        </div>
                        <div class="ml-3 lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                            <img src="{{ asset('assets/Asset_1.png') }}" alt="" class="select-none" />
                        </div>
                        <div class="ml-3 lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                            <img src="{{ asset('assets/Asset_1.png') }}" alt="" class="select-none" />
                        </div>
                        <div class="ml-3 lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                            <img src="{{ asset('assets/Asset_1.png') }}" alt="" class="select-none" />
                        </div>
                    </div>
                    <x-common.divider-x-component class="mt-20" />
                    <div class="flex flex-row xs:flex-col w-full items-stretch gap-[1px] relative">
                        <div class="lg:basis-1/2 md:basis-1/2 sm:basis-1/2 lg:pr-12 md:pr-12 sm:pr-12 xs:pr-0 py-12">
                            <p class="font-dm-sans lg:text-2xl md:text-2xl sm:text-xl xs:text-xl text-partial">
                                {!! $album->album_detail !!}
                            </p>
                        </div>
                        <x-common.divider-x-component class="hidden xs:block" />
                        <x-common.divider-y-component class="block xs:hidden" />
                        <div class="lg:basis-1/2 md:basis-1/2 sm:basis-1/2 lg:pl-12 md:pl-12 sm:pl-12 xs:pl-0 py-12">
                            <p class="font-dm-sans lg:text-2xl md:text-2xl sm:text-xl xs:text-xl text-partial">
                                {!! $album->album_description !!}
                            </p>
                        </div>
                    </div>
                    <x-common.divider-x-component />
                </div>
            </div>
        </div>

        <x-common.project-section class="" classTitle="text-primary text-start leading-none" :showButton=true>
            <x-common.project-component :albums="$albums" />
        </x-common.project-section>

        <x-common.article-section class="" classTitle="text-primary" title="Postingan Terbaru" pathName="articles">
            <x-common.article-component :articles="$articles" />
        </x-common.article-section>

        <x-common.contact-section :contact="$contact" />

        <x-common.footer-section />
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(window).scroll(function() {
            var scrollPos = $(document).scrollTop();
            $(".divider-component").each(function(e) {
                if (scrollPos >= $(this).offset().top - 900)
                    $(this).animate({
                        width: "100%"
                    }, 2000);
            });
        });
    </script>

    <script>
        function dragToScroll1() {
            const slider = document.querySelector(".items");
            let isDown = false;
            let startX;
            let scrollLeft;

            slider.addEventListener("mousedown", (e) => {
                isDown = true;
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });
            slider.addEventListener("mouseleave", () => {
                isDown = false;
            });
            slider.addEventListener("mouseup", () => {
                isDown = false;
            });
            slider.addEventListener("mousemove", (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 3; //scroll-fast
                slider.scrollLeft = scrollLeft - walk;
            });
        }
        dragToScroll1();
    </script>
@endsection
