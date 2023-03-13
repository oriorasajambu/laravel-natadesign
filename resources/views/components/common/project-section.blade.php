<div class="bg-[#FFFBF2] w-full flex flex-row justify-center lg:py-20 md:py-20 sm:py-20 xs:py-20 {{ $class }}">
    <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
        <div class="grid grid-col-1">
            <x-common.subtitle-component class="{{ $classTitle }}">
                Project Terbaru
            </x-common.subtitle-component>
            {{ $slot }}
            <a aria-label="See Our Portofolio" href="/portofolio"
                class="{{ $showButton ? "" : "hidden" }} border-2 border-[#707070] text-center mt-6 py-6 text-partial font-dm-sans font-bold lg:text-xl text-base">
                Selengkapnya
            </a>
        </div>
    </div>
</div>
