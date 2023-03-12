<div class="bg-[#FFFBF2] py-20">
    <div class="flex flex-row justify-center">
        <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
            <div class="w-full flex flex-col justify-evenly h-full gap-y-10 lg:gap-y-20">
                <div class="flex flex-row">
                    <x-common.subtitle-component class="text-primary">
                        Memberikan Layanan Terbaik
                    </x-common.subtitle-component>
                </div>
                <div
                    class="flex flex-row flex-wrap sm:flex-nowrap sm:flex-col gap-x-10 gap-y-10 lg:gap-x-20 lg:gap-y-12 justify-between">
                    {{ $slot }}
                    <x-common.divider-x-component class="block lg:hidden md:hidden" />
                </div>
            </div>
        </div>
    </div>
</div>
