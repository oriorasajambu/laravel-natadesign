@extends('layout')
@section('head')
    <x-custom-head-component :seo="$seo" />
@endsection
@section('content')
    <div style="background-image: url({{ asset('assets/fixed_background.webp') }})"
        class="h-screen w-full bg-no-repeat bg-cover bg-center bg-fixed absolute" />

    <x-home.heroes-section />

    <x-home.about-us-section headline="{{ $aboutUs->headline }}" title="{{ $aboutUs->title_1 }}"
        content="{{ $aboutUs->content_1 }}" />

    <x-home.service-section>
        @foreach ($availableService as $service)
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

    <x-home.workflows-section :workflows="$workflows" />

    <x-common.project-section class="" classTitle="text-primary text-center leading-none">
        <x-common.project-component :albums="$albums" />
    </x-common.project-section>

    <x-home.project-stat-section />

    <x-home.high-light-section />

    <x-home.client-section>
        <x-common.client-component :clients="$clients" />
    </x-home.client-section>

    <x-home.testimony-section />

    <x-common.motto-section class="bg-[#F2EEE6] pt-20" headline="{{ $motto->headline }}" title="{{ $motto->title }}"
        content="{{ $motto->content }}" />

    <x-home.faq-section :faqs="$faqs" />

    <x-common.project-section class="" classTitle="text-primary text-start leading-none" showButton=true>
        <x-common.project-component :albums="$albums" />
    </x-common.project-section>

    <x-common.article-section class="" classTitle="text-primary" title="Postingan Terbaru" pathName="articles">
        <x-common.article-component :articles="$articles" />
    </x-common.article-section>

    <x-common.contact-section :contact="$contact" />

    <x-common.footer-section />
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
@endsection
