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
        <div class="w-full flex flex-row justify-center lg:pb-20 pb-10 bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
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
            </div>
        </div>

        <div class="w-full flex flex-row justify-center bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <div class="grid grid-cols-1 grid-flow-row">
                    <div class="flex flex-row flex-wrap md:flex-nowrap lg:flex-nowrap pb-20 mt-20 xs:mt-10">
                        <div class="lg:basis-1/3 md:basis-1/3 lg:pr-20 md:pr-0">
                            <h3 class="text-3xl font-dm-sans font-bold text-partial uppercase">{{ $about->title_2 }}</h3>
                        </div>
                        <div class="lg:basis-2/3 md:basis-2/3 md:pl-12 lg:mt-0 md:mt-0 mt-10">
                            <p class="font-dm-sans lg:text-2xl md:text-2xl text-partial">
                                {{ $about->content_2 }}
                            </p>
                        </div>
                    </div>
                    <x-common.divider-x-component class="" />
                    <div class="flex lg:flex-row flex-wrap pb-20 lg:mt-20 mt-10">
                        <div class="lg:basis-1/3 md:basis-1/3 lg:pr-20 md:pr-0">
                            <h3 class="text-3xl font-dm-sans font-bold text-partial uppercase">{{ $about->title_3 }}</h3>
                        </div>
                        <div class="lg:basis-2/3 md:basis-2/3 md:pl-12 lg:mt-0 md:mt-0 mt-10">
                            <p class="font-dm-sans lg:text-2xl md:text-2xl text-partial">
                                {{ $about->content_3 }}
                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <x-common.divider-y-component class="xs:hidden block" />
                        <x-common.divider-x-component class="" />
                        <div
                            class="grid grid-cols-2 xs:grid-cols-1 grid-flow-row justify-center lg:gap-x-20 md:gap-x-10 gap-x-5">
                            @foreach ($employees as $key => $employee)
                                <div class="flex flex-col gap-6 mx-auto my-20 sm:my-10 xs:my-10">
                                    <img src="https://admin.natadesign.id/{{ $employee->image }}" width={391} height={336}
                                        alt="{{ $employee->alt }}" />
                                    <h4
                                        class="font-dm-sans font-bold text-primary uppercase self-start lg:text-3xl md:text-3xl sm:text-2xl xs:text-2xl">
                                        {{ $employee->name }}</h4>
                                    <p
                                        class="font-dm-sans font-bold text-partial self-start lg:text-2xl md:text-2xl sm:text-xl xs:text-xl">
                                        {{ $employee->job_desk }}</p>
                                </div>
                                @if ($key % 2 != 0)
                                    <x-common.divider-x-component class="col-span-2 xs:col-span-1" />
                                @else
                                    <x-common.divider-x-component class="lg:hidden md:hidden sm:hidden xs:block col-span-1" />
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-home.service-section>
            @foreach ($services as $service)
                <div class="grow lg:basis-[44%] md:basis-[44%]">
                    <x-common.divider-x-component class="" />
                    <h3
                        class="font-dm-sans font-normal text-primary pt-6 lg:pt-12 pb-6 lg:text-5xl md:text-[32px] sm:text-[32px] text-xl">
                        {{ $service->title }}
                    </h3>
                    <p class="font-dm-sans text-partial lg:text-2xl md:text-xl sm:text-xl leading-8">
                        {{ $service->content }}
                    </p>
                </div>
            @endforeach
        </x-home.service-section>

        <x-common.motto-section class="bg-[#FFFBF2]" headline="{{ $motto->headline }}" title="{{ $motto->title }}"
            content="{{ $motto->content }}" />

        <div class="w-full flex flex-row justify-center bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <x-common.divider-x-component class="" />
            </div>
        </div>

        <div class="w-full flex flex-row justify-center lg:pb-20 pb-10 bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <div
                    class="items2 overflow-x-scroll hide-scrollbar overflow-y-hidden flex flex-nowrap gap-x-6 pt-20 pb-1 m-0">
                    <div class="lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                        <img src="{{ asset('assets/Asset_1.png') }}" fill alt="" class="select-none" />
                    </div>
                    <div class="ml-3 lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                        <img src="{{ asset('assets/Asset_1.png') }}" fill alt="" class="select-none" />
                    </div>
                    <div class="ml-3 lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                        <img src="{{ asset('assets/Asset_1.png') }}" fill alt="" class="select-none" />
                    </div>
                    <div class="ml-3 lg:h-[550px] md:h-[450px] sm:h-[350px] xs:h-[250px] aspect-square relative">
                        <img src="{{ asset('assets/Asset_1.png') }}" fill alt="" class="select-none" />
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-row justify-center bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <x-common.divider-x-component class="" />
            </div>
        </div>

        <x-common.project-section class="" classTitle="text-primary text-start leading-none" :showButton=true>
            <x-common.project-component :albums="$albums" />
            <a aria-label="See Our Portofolio" href="/portofolio"
                class="border-2 border-[#707070] text-center mt-6 py-6 text-partial font-dm-sans font-bold lg:text-xl text-base">
                Selengkapnya
            </a>
        </x-common.project-section>

        <x-common.article-section class="" classTitle="text-primary" title="Postingan Terbaru" pathName="articles">
            <x-common.article-component :articles="$articles" />
        </x-common.article-section>

        <x-common.contact-section :contact="$contact" />

        <x-common.footer-section />
    </div>
@endsection
@section('scripts')
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

        function dragToScroll2() {
            const slider = document.querySelector(".items2");
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

        dragToScroll1()
        dragToScroll2()
    </script>
@endsection
