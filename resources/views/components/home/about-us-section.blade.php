<div class="bg-primary py-20">
    <div class='w-full flex flex-row justify-center'>
        <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
            <div class="flex flex-row justify-between relative">
                <div class="flex flex-col justify-center lg:gap-12 md:gap-10 gap-6">
                    <p class="font-play-serif text-xl text-white">{{ $headline }}</p>
                    <x-common.subtitle-component class="text-white">
                        {!! $title !!}
                    </x-common.subtitle-component>
                    <div class="text-white font-dm-sans font-normal text-sm lg:text-2xl md:text-xl sm:text-xl leading-8">
                        {!! html_entity_decode($content) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
