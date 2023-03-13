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
                <div class="flex flex-row sm:flex-col xs:flex-col gap-[1px] bg-primary mt-20">
                    <div class="lg:basis-2/3 md:basis-2/3 flex-1 lg:pr-12 md:pr-12 pr-0 bg-[#FFFBF2] flex flex-col">
                        <div class="flex flex-row justify-between items-center mb-10">
                            <h1
                                class="text-primary uppercase font-dm-sans font-bold text-4xl lg:text-[48px] md:text-5xl leading-tight">
                                Kontak
                            </h1>
                        </div>
                    </div>
                </div>
                <x-common.divider-x-component class="" />
            </div>
        </div>

        <x-common.contact-section :contact="$contact" />

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

        <x-common.footer-section />
    </div>
@endsection
@section('scripts')
@endsection
