<div class="{{ $class }} flex flex-col gap-6">
    <label for="{{ $id }}" class="font-dm-sans font-normal text-2xl select-none">
        {{ $label }} <span class='text-red-600'>*</span>
    </label>
    @if ($isTextArea == 'true')
        <textarea id="{{ $id }}" name={{ $name }} placeholder="{{ $placeHolder }}" required
            class="appearance-none bg-transparent border-none w-full h-20 text-partial font-dm-sans leading-tight focus:outline-none"></textarea>
    @else
        <input id="{{ $id }}" name={{ $name }} type={{ $type }}
            placeholder="{{ $placeHolder }}" required
            class='appearance-none bg-transparent border-none w-full text-partial font-dm-sans leading-tight focus:outline-none' />
    @endif
    <x-common.divider-x-component class="" />
</div>
