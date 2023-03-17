@extends("layout")
@section("head")
    <x-custom-head-component :seo="$seo" />
@endsection
@section("content")
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
                        <h3 class="font-play-serif font-bold uppercase text-2xl text-primary xs:hidden">Informasi</h3>
                    </div>
                    <x-common.divider-x-component class="" />
                    <x-common.article-component :articles="$articles->items()" />
                    {{ $articles->links("vendor.pagination.tailwind") }}
                </div>
            </div>
        </div>

        <x-common.project-section class="" classTitle="text-primary text-start leading-none" :showButton=true>
            <x-common.project-component :albums="$albums" />
            <a aria-label="See Our Portofolio" href="/portofolio"
                class="border-2 border-[#707070] text-center mt-6 py-6 text-partial font-dm-sans font-bold lg:text-xl text-base">
                Selengkapnya
            </a>
        </x-common.project-section>

        <x-common.article-section class="" classTitle="text-primary" title="Ulasan Media" pathName="media">
            <x-common.article-component :articles="$medias" />
        </x-common.article-section>

        <x-common.contact-section :contact="$contact" />

        <x-common.footer-section />
    </div>
@endsection
@section("scripts")
@endsection
