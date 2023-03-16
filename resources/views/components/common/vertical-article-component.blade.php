<div class="grid grid-cols-1 pb-12">
    <h2 class="text-5xl text-primary font-dm-sans font-bold">{{ $title }}</h2>
    @foreach ($articles as $key => $article)
        <a aria-label="{{ $article->title }}"
            href="{{ $article->category == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}">
            <div class="grid grid-cols-1 mt-12">
                <div class="w-full h-auto aspect-square relative">
                    <img src={{ $article->thumbnail->image }} alt="{{ $article->thumbnail->alt }}" />
                </div>
                <h3 class="mt-6 font-dm-sans font-bold text-2xl text-partial">{{ $article->title }}</h3>
                <p class="font-dm-sans font-bold text-xs my-6 text-partial">Ditulis oleh
                    {{ $article->author }}
                    <x-common.date-component date="{{ $article->published_at }}"
                        class="text-partial font-dm-sans font-bold text-xs" />
                </p>
                <p class="text-secondary font-dm-sans text-base leading-6 line-clamp-3">
                    {!! $article->content !!}
                </p>
            </div>
        </a>
    @endforeach
    {{ $slot }}
</div>
