<div class="bg-[#FFFBF2] pb-10 pt-20 flex flex-row justify-center">
    <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
        <div class="flex flex-col justify-between">
            <div class="flex flex-col justify-evenly items-center w-full gap-20">
                <div class="flex flex-row">
                    <x-common.subtitle-component class="text-primary lg:text-center md:text-center sm:text-start">
                        Pertanyaan yang Sering diajukan
                    </x-common.subtitle-component>
                </div>
                <div class="flex flex-col w-full">
                    <x-common.divider-x-component />
                    @foreach ($faqs as $faq)
                        <x-common.accordion-component class="lg:px-12 md:px-12 sm:px-12" title="{{ $faq->title }}"
                            content="{{ $faq->content }}" position="-1" />
                        <x-common.divider-x-component />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
