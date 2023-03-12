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
                <div class="grid grid-flow-row">
                    <div class="flex flex-row justify-between items-center py-14">
                        <x-common.subtitle-component class="uppercase text-primary">
                            Artikel
                        </x-common.subtitle-component>
                        <h6 class='font-play-serif font-bold uppercase text-2xl text-primary xs:hidden'>Informasi</h6>
                    </div>
                    <x-common.divider-x-component class="" />
                    <x-common.article-component :articles='$articles->items()' />
                    {{ $articles->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>

        <x-common.project-section class="" classTitle="text-primary text-start leading-none" :showButton=true>
            <x-common.project-component :albums='$albums' />
        </x-common.project-section>

        <x-common.article-section class="" classTitle="text-primary" title="Ulasan Media" pathName="media">
            <x-common.article-component :articles="$medias" />
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
@endsection
