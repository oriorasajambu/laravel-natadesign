<div class="flex flex-col gap-6">
    <div class='grid grid-cols-3 xs:grid-cols-1 gap-6 lg:mt-20 mt-10'>
        @foreach ($articles as $key => $article)
            @if ($key % 2 == 0)
                <a aria-label={{ $article->title }}
                    href="{{ $article->category == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}">
                    <article class="flex flex-col gap-6">
                        <x-common.date-component date='{{ $article->published_at }}' />
                        <div class="basis-[19%] w-full grow aspect-square">
                            <img src={{ $article->thumbnail_url }} alt={{ $article->title }} />
                        </div>
                        <h2 class="text-partial font-dm-sans font-bold text-xl truncate">{{ $article->title }}</h2>
                        <div class="text-secondary font-dm-sans text-base leading-6 line-clamp-3">
                            {!! $article->content !!}
                        </div>
                    </article>
                </a>
            @else
                <a aria-label={{ $article->title }}
                    href="{{ $article->category == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}">
                    <article class="flex flex-col gap-6">
                        <x-common.date-component date='{{ $article->published_at }}' />
                        <h2 class="text-partial font-dm-sans font-bold text-xl truncate">{{ $article->title }}</h2>
                        <div class="text-secondary font-dm-sans text-base leading-6 line-clamp-3">
                            {!! $article->content !!}
                        </div>
                        <div class="basis-[19%] w-full grow aspect-square">
                            <img src={{ $article->thumbnail_url }} alt={{ $article->title }} />
                        </div>
                    </article>
                </a>
            @endif
        @endforeach
    </div>
</div>
