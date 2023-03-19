<div class="bg-[#F2EEE6] py-20 flex flex-row justify-center">
    <div
        class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] flex flex-row justify-center lg:px-20 md:px-0 sm:px-0">
        <div class="flex flex-col justify-evenly w-full">
            <div class="flex flex-row justify-center pb-10">
                <x-common.subtitle-component
                    class="text-primary lg:text-center
                    md:text-center sm:text-left leading-tight">
                    Bagaimana Cara Kerjanya?
                </x-common.subtitle-component>
            </div>
            <x-common.divider-x-component class="" />
            @foreach ($workflows as $key => $workflow)
                <x-common.accordion-component class="lg:px-12 md:px-12 sm:px-12" title="{{ $workflow->title }}"
                    content="{{ $workflow->content }}" position="{{ $key + 1 }}" />
                <x-common.divider-x-component class="" />
            @endforeach
        </div>
    </div>
</div>
