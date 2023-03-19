<div class="flex flex-row flex-1 flex-nowrap overflow-x-auto lg:grid lg:grid-cols-5 md:grid md:grid-cols-4 sm:grid sm:grid-cols-3 lg:gap-6 md:gap-6 sm:gap-3 ssm:gap-3 xs:gap-2 w-full items-center">
    @foreach ($clients as $client)
        <div class="grow w-full ssm:h-[250px] xs:h-[250px] border-2 border-primary aspect-square">
            <img class="w-full p-10" width="103" height="103" loading="lazy" src="https://admin.natadesign.id/{{ $client->image }}"
                alt="{{ $client->alt }}" />
        </div>
    @endforeach
</div>