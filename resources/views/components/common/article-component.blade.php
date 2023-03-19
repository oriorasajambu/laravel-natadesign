<div class="flex flex-col gap-6">
    <div class='grid grid-cols-3 xs:grid-cols-1 gap-6 lg:mt-20 mt-10'>
        @foreach ($articles as $key => $article)
            @if ($key % 2 == 0)
                <a aria-label={{ $article->title }} class="lg:block md:block sm:block xs:hidden"
                    href="{{ $article->category->name == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}">
                    <article class="flex flex-col gap-6">
                        <x-common.date-component date='{{ $article->published_at }}' />
                        <img src="{{ isset($article->thumbnail->image) ? 'https://admin.natadesign.id/' . $article->thumbnail->image : asset('assets/favicon.svg') }}"
                            class="basis-[19%] w-full grow aspect-square" loading="lazy"
                            alt="{{ isset($article->thumbnail->alt) ? $article->thumbnail->alt : $article->title }}" />
                        <h2 class="text-partial font-dm-sans font-bold text-xl truncate">{{ $article->title }}</h2>
                        <div class="text-partial font-dm-sans text-base leading-6 line-clamp-3">
                            {!! $article->content !!}
                        </div>
                    </article>
                </a>
            @else
                <a aria-label={{ $article->title }} class="lg:block md:block sm:block xs:hidden"
                    href="{{ $article->category->name == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}">
                    <article class="flex flex-col gap-6">
                        <x-common.date-component date='{{ $article->published_at }}' />
                        <h2 class="text-partial font-dm-sans font-bold text-xl truncate">{{ $article->title }}</h2>
                        <div class="text-partial font-dm-sans text-base leading-6 line-clamp-3">
                            {!! $article->content !!}
                        </div>
                        <img src="{{ isset($article->thumbnail->image) ? 'https://admin.natadesign.id/' . $article->thumbnail->image : asset('assets/favicon.svg') }}"
                            class="basis-[19%] w-full grow aspect-square" loading="lazy"
                            alt="{{ isset($article->thumbnail->alt) ? $article->thumbnail->alt : $article->title }}" />
                    </article>
                </a>
            @endif
            <a aria-label={{ $article->title }} class="lg:hidden md:hidden sm:hidden xs:block"
                href="{{ $article->category->name == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}">
                <article class="flex flex-col lg:gap-6 md:gap-6 sm:gap-3 xs:gap-3">
                    <h2 class="text-partial font-dm-sans font-bold text-xl truncate">{{ $article->title }}</h2>
                    <x-common.date-component date='{{ $article->published_at }}' />
                    <div class="text-partial font-dm-sans text-base leading-6 line-clamp-3">
                        {!! $article->content !!}
                    </div>
                    <img src="{{ isset($article->thumbnail->image) ? 'https://admin.natadesign.id/' . $article->thumbnail->image : asset('assets/favicon.svg') }}"
                        class="basis-[19%] w-full grow aspect-square" loading="lazy"
                        alt="{{ isset($article->thumbnail->alt) ? $article->thumbnail->alt : $article->title }}" />
                </article>
            </a>
        @endforeach
    </div>
</div>
