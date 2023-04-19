<div class="flex flex-col gap-6">
    <div class="grid grid-cols-3 xs:grid-cols-1 lg:gap-x-6 md:gap-x-6 sm:gap-x-6 ssm:gap-x-8 xs:gap-x-8 lg:gap-y-10 md:gap-y-10 sm:gap-y-10 ssm:gap-y-10 xs:gap-y-10 lg:mt-20 mt-10">
        @foreach ($articles as $key => $article)
            @if ($key % 2 == 0)
                <article class="relative lg:block md:block sm:block ssm:hidden xs:hidden">
                    <a aria-label={{ $article->title }}
                        href="{{ $article->category->name == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}"
                        class="absolute w-full h-full"></a>
                    <div class="flex flex-col">
                        <x-common.date-component date='{{ $article->published_at }}' class="mb-3" />
                        <img src="{{ isset($article->thumbnail->image) ? 'https://admin.natadesign.id/' . $article->thumbnail->image : asset('assets/favicon.svg') }}"
                            class="basis-[19%] w-full grow aspect-square mb-6" loading="lazy"
                            alt="{{ isset($article->thumbnail->alt) ? $article->thumbnail->alt : $article->title }}" />
                        <h2
                            class="text-partial font-dm-sans font-bold lg:text-xl md:text-xl sm:text-xl ssm:text-base xs:text-base truncate mb-3">
                            {{ $article->title }}</h2>
                        <div class="text-partial font-dm-sans text-base leading-6 line-clamp-3">
                            {!! $article->content !!}
                        </div>
                    </div>
                </article>
            @else
                <article class="relative lg:block md:block sm:block ssm:hidden xs:hidden">
                    <a aria-label={{ $article->title }}
                        href="{{ $article->category->name == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}"
                        class="absolute w-full h-full"></a>
                    <div class="flex flex-col">
                        <x-common.date-component date='{{ $article->published_at }}' class="mb-3" />
                        <h2
                            class="text-partial font-dm-sans font-bold lg:text-xl md:text-xl sm:text-xl ssm:text-base xs:text-base truncate mb-3">
                            {{ $article->title }}</h2>
                        <div class="text-partial font-dm-sans text-base leading-6 line-clamp-3 mb-3">
                            {!! $article->content !!}
                        </div>
                        <img src="{{ isset($article->thumbnail->image) ? 'https://admin.natadesign.id/' . $article->thumbnail->image : asset('assets/favicon.svg') }}"
                            class="basis-[19%] w-full grow aspect-square" loading="lazy"
                            alt="{{ isset($article->thumbnail->alt) ? $article->thumbnail->alt : $article->title }}" />
                    </div>
                </article>
            @endif
            <article
                class="relative lg:hidden md:hidden sm:hidden ssm:block xs:block">
                <a aria-label={{ $article->title }}
                    href="{{ $article->category->name == 'Ulasan Media' ? '/media' : '/articles' }}/{{ $article->slug }}"
                    class="absolute w-full h-full"></a>
                <div class="flex flex-col">
                    <h2
                        class="text-partial font-dm-sans font-bold lg:text-xl md:text-xl sm:text-xl ssm:text-base xs:text-base truncate mb-3">
                        {{ $article->title }}</h2>
                    <x-common.date-component date='{{ $article->published_at }}' class="mb-3" />
                    <div class="text-partial font-dm-sans text-base leading-6 line-clamp-3 mb-6">
                        {!! $article->content !!}
                    </div>
                    <img src="{{ isset($article->thumbnail->image) ? 'https://admin.natadesign.id/' . $article->thumbnail->image : asset('assets/favicon.svg') }}"
                        class="basis-[19%] w-full grow aspect-square" loading="lazy"
                        alt="{{ isset($article->thumbnail->alt) ? $article->thumbnail->alt : $article->title }}" />
                </div>
            </article>
        @endforeach
    </div>
</div>
