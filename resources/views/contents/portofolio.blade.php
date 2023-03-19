@extends('layout')
@section('head')
    <x-custom-head-component :seo="$seo" />
@endsection
@section('content')
    <div class="flex flex-col justify-start">
        <div class="w-full flex flex-row justify-center bg-primary">
            <div
                class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] flex flex-col justify-between">
                <x-top-bar-component class="bg-primary" />
            </div>
        </div>
        <div class="w-full flex flex-row justify-center bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <div class="grid grid-flow-row">
                    <div class="flex flex-row justify-between items-center py-14">
                        <x-common.subtitle-component class="uppercase text-primary">
                            {{ $album->title }}
                        </x-common.subtitle-component>
                    </div>
                    <x-common.divider-x-component class="" />
                    <div
                        class="items overflow-x-scroll hide-scrollbar overflow-y-hidden flex flex-nowrap lg:gap-x-6 md:gap-x-6 sm:gap-x-3 ssm:gap-x-3 xs:gap-x-2 pt-20 pb-1 m-0">
                        @foreach ($album->photos as $key => $photo)
                            <div
                                class="{{ $key != 0 ? 'lg:ml-3 md:ml-3 sm:ml-0 xs:ml-0' : '' }} lg:h-[550px] md:h-[450px] sm:h-[350px] ssm:h-[300px] xs:h-[250px] aspect-square">
                                <img src="https://admin.natadesign.id/{{ $photo->original }}" loading="eager"
                                    alt="{{ $photo->alt }}" class="select-none hover:cursor-pointer"
                                    onclick="openModal();currentSlide({{ $key + 1 }})" />
                            </div>
                        @endforeach
                    </div>
                    <x-common.divider-x-component class="mt-20" />
                    <div class="flex flex-row ssm:flex-col xs:flex-col w-full items-stretch gap-[1px] relative">
                        <div class="lg:basis-1/2 md:basis-1/2 sm:basis-1/2 lg:pr-12 md:pr-12 sm:pr-12 xs:pr-0 py-12">
                            <p class="font-dm-sans lg:text-2xl md:text-2xl sm:text-xl xs:text-xl text-partial">
                                {!! $album->album_detail !!}
                            </p>
                        </div>
                        <x-common.divider-x-component class="hidden ssm:block xs:block" />
                        <x-common.divider-y-component class="block ssm:hidden xs:hidden" />
                        <div class="lg:basis-1/2 md:basis-1/2 sm:basis-1/2 lg:pl-12 md:pl-12 sm:pl-12 xs:pl-0 py-12">
                            <p class="font-dm-sans lg:text-2xl md:text-2xl sm:text-xl xs:text-xl text-partial">
                                {!! $album->album_description !!}
                            </p>
                        </div>
                    </div>
                    <x-common.divider-x-component class="" />
                </div>
            </div>
        </div>

        <x-common.project-section class="py-20" classTitle="text-primary text-start leading-none" :showButton=true>
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

        <x-common.modal-light-show :album="$album" />
    </div>
@endsection
@section('scripts')
    <script>
        let modal = document.getElementById("lightShowModal");
        // Open the Modal
        function openModal() {
            modal.style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            modal.style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("modal-slide");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
