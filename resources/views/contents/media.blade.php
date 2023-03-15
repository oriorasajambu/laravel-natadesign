@extends('layout')
@section('head')
    <x-custom-head-component :seo="$article->seo" />
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
                <div class="flex flex-row sm:flex-col xs:flex-col gap-[1px] bg-primary mt-20">
                    <div class="lg:basis-2/3 md:basis-2/3 flex-1 lg:pr-12 md:pr-12 pr-0 bg-[#FFFBF2] flex flex-col">
                        <div class="flex flex-row justify-between items-center mb-20">
                            <h1
                                class="text-primary font-dm-sans font-bold text-4xl lg:text-[48px] md:text-5xl leading-tight">
                                {{ $article->title }}</h1>
                        </div>
                        <img src={{ $article->thumbnail_url }} class="w-full aspect-square relative mb-12" alt={{ $article->title }} />
                        <x-common.divider-x-component class="" />
                        <div class="flex flex-row justify-between my-7 items-center">
                            <p class="text-partial text-xs font-dm-sans font-bold mr-1">Ditulis Oleh
                                {{ $article->seo->meta_authors }}
                                <x-common.date-component date="{{ $article->published_at }}"
                                    class="text-partial font-dm-sans font-bold text-xs" />
                            </p>
                            <div class="flex flex-row ml-auto items-center">
                                <p class="text-partial font-dm-sans font-bold text-base mr-6">Bagikan: </p>
                                <a aria-label="Share this post" href="#"
                                    class="text-partial font-dm-sans font-bold grow text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28"
                                        viewBox="0 0 25 28">
                                        <g id="Icon_feather-share" data-name="Icon feather-share"
                                            transform="translate(0.5 0.5)">
                                            <path id="Path_119" data-name="Path 119"
                                                d="M6,18V30a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V18" transform="translate(-6 -6)"
                                                fill="none" stroke="#404040" strokeLinecap="round" strokeLinejoin="round"
                                                strokeWidth="1" />
                                            <path id="Path_120" data-name="Path 120" d="M24,9,18,3,12,9"
                                                transform="translate(-6 -3)" fill="none" stroke="#404040"
                                                strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" />
                                            <path id="Path_121" data-name="Path 121" d="M18,3V22.5"
                                                transform="translate(-6 -3)" fill="none" stroke="#404040"
                                                strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <x-common.divider-x-component class="" />
                        <p class="mt-12 font-dm-sans text-secondary">
                            {!! $article->content !!}
                        </p>
                        <div class="mt-12">
                            <p class="font-dm-sans text-secondary">Tags: {{ $article->seo->meta_keywords }}</p>
                            <p class="font-dm-sans text-secondary">Kategori: {{ $article->category->name }}</p>
                        </div>
                    </div>
                    <div class="lg:flex md:flex sm:hidden xs:hidden basis-1/3 lg:pl-12 md:pl-12 pl-0 flex-col bg-[#FFFBF2]">
                        <x-common.vertical-article-component :articles="$articles" title="Postingan Terbaru" />
                        <a href='/articles' aria-label='See More Media Review' class="font-dm-sans text-partial">Selengkapnya</a>
                        <x-common.vertical-album-component :albums="$albums" />
                        <a href='/portofolio' aria-label='See More Portofolio' class="font-dm-sans text-partial">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <x-common.project-section class="lg:hidden md:hidden sm:hidden xs:flex" classTitle="text-primary text-start leading-none" :showButton=true>
            <x-common.project-component :albums="$albums" />
            <a aria-label="See Our Portofolio" href="/portofolio"
                class="border-2 border-[#707070] text-center mt-6 py-6 text-partial font-dm-sans font-bold lg:text-xl text-base">
                Selengkapnya
            </a>
        </x-common.project-section>

        <x-common.article-section class="lg:hidden md:hidden sm:hidden xs:flex" classTitle="text-primary" title="Postingan Terbaru" pathName="articles">
            <x-common.article-component :articles="$articles" />
        </x-common.article-section>

        <x-common.contact-section :contact="$contact" />

        <x-common.footer-section />
    </div>
@endsection
@section('scripts')
@endsection
