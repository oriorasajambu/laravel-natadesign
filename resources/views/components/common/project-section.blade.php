<div class="bg-[#FFFBF2] w-full flex flex-row justify-center {{ $class }}">
    <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
        <div class="grid grid-col-1">
            <x-common.subtitle-component class="{{ $classTitle }}">
                Project Terbaru
            </x-common.subtitle-component>
            {{ $slot }}
        </div>
    </div>
</div>
