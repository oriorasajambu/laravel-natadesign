<div class="grid grid-cols-1 my-12 gap-6">
    @foreach ($albums as $key => $album)
        <a aria-label="{{ $album->title }}" href="/portofolio/{{ $album->slug }}">
            <div class="grid grid-cols-1">
                <h2 class="font-dm-sans font-bold text-partial text-2xl">{{ $album->title }}</h2>
                <p class="text-partial font-dm-sans text-xs leading-6 line-clamp-3 my-6">
                    {{ isset($album->cover->alt) ? $album->cover->alt : $album->title }}</p>
                <img class="w-full aspect-square"
                    src="{{ isset($album->cover->image) ? 'https://admin.natadesign.id/' . $album->cover->image : asset('assets/favicon.svg') }}"
                    alt="{{ isset($album->cover->alt) ? $album->cover->alt : $album->title }}" width="239"
                    height="239" />
            </div>
        </a>
    @endforeach
</div>
