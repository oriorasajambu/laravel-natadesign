<div class="bg-[#F2EEE6] py-20 xs:py-10 flex flex-row justify-center {{ $class }}">
    <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
        <div class="flex flex-col justify-between">
            <x-common.subtitle-component class="{{ $classTitle }}">
                {{ $title }}
            </x-common.subtitle-component>
            {{ $slot }}
            <a href="/{{ $pathName }}" aria-label='See All Articles'
                class="border-2 border-[#707070] w-full text-center mt-6 py-6 text-partial font-dm-sans font-bold lg:text-xl text-base">
                Selengkapnya
            </a>
        </div>
    </div>
</div>
