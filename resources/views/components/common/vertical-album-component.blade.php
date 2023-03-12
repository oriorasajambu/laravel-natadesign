<div class="grid grid-cols-1 my-12 gap-6">
    @foreach ($albums as $key => $album)
        <a aria-label="{{ $album->title }}" href="/portofolio/{{ $album->slug }}">
            <div class="grid grid-cols-1">
                <h2 class="font-dm-sans font-bold text-partial text-2xl">{{ $album->title }}</h2>
                <p class="text-partial font-dm-sans text-xs leading-6 line-clamp-3 my-6">{{ $album->image }}</p>
                <div class="w-full h-auto aspect-square relative">
                    <img src="https://admin.natadesign.id/{{ $album->image }}" alt="{{ $album->alt }}" />
                </div>
            </div>
        </a>
    @endforeach
</div>
