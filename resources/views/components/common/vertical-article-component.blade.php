<div class="grid grid-cols-1 pb-12">
    <h2 class="text-5xl text-primary font-dm-sans font-bold">{{ $title }}</h2>
    @foreach ($articles as $key => $article)
        <a aria-label="{{ $article->title }}"
            href="{{ $article->category->name == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}">
            <div class="grid grid-cols-1 mt-12">
                <img class="w-full aspect-square" src="{{ isset($article->thumbnail->image) ? 'https://admin.natadesign.id/' . $article->thumbnail->image : asset('assets/favicon.svg') }}"
                        alt="{{ isset($article->thumbnail->alt) ? $article->thumbnail->alt : $article->title }}" width="239" height="239" loading="lazy" />
                <h3 class="mt-6 font-dm-sans font-bold text-2xl text-partial">{{ $article->title }}</h3>
                <p class="font-dm-sans font-bold text-xs my-6 text-partial">Ditulis oleh
                    {{ $article->user->name }}
                    <x-common.date-component date="{{ $article->published_at }}"
                        class="text-partial font-dm-sans font-bold text-xs" />
                </p>
                <div class="text-secondary font-dm-sans text-base leading-6 line-clamp-3">
                    {!! $article->content !!}
                </div>
            </div>
        </a>
    @endforeach
    {{ $slot }}
</div>