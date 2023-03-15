<div class="flex flex-col select-none py-6 relative overflow-hidden">
    <input type="checkbox" class="peer absolute w-full h-full p-0 m-0 opacity-0 z-10 cursor-pointer" />
    <div class="flex flex-row justify-between w-full {{ $class }} ">
        @if ($position != -1)
            <p class="basis-1/6 text-2xl xs:text-xl font-dm-sans text-partial">
                {{ str_pad($position, 2, '0', STR_PAD_LEFT) }}
            </p>
        @endif
        <p class="basis-5/6 text-2xl xs:text-xl font-dm-sans text-partial ">{{ $title }}</p>
    </div>
    <div class="self-end absolute transition-transform duration-500 rotate-0 peer-checked:rotate-90 lg:mr-12 md:mr-12 sm:mr-12 xs:mr-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="14.12" height="25.414" viewBox="0 0 14.12 25.414">
            <path id="Path_60" data-name="Path 60" d="M0,12,12,0,24,12" transform="translate(12.706 0.707) rotate(90)"
                fill="none" stroke="#10403c" strokeWidth="2" />
        </svg>
    </div>
    <div
        class="transition-all duration-500 peer-checked:flex hidden flex-row w-full lg:text-2xl md:text-xl sm:text-xl font-dm-sans text-partial {{ $class }}">
        @if ($position != -1)
            <p class="basis-1/6 text-2xl xs:text-xl font-dm-sans invisible">00</p>
        @endif
        <p class="basis-5/6 text-base text-start ">
            {{ $content }}
        </p>
        <div></div>
    </div>
</div>
