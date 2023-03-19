<div id="lightShowModal" style="display: none"
    class="fixed z-10 left-0 top-0 w-screen h-screen overflow-hidden backdrop-blur-md bg-black/30">
    <div class="relative mx-auto my-auto p-0 w-11/12 h-full max-w-7xl">
        @foreach ($album->photos as $key => $photo)
            <div style="display: none" class="modal-slide">
                <div class="text-white font-dm-sans absolute top-0 px-1 py-4">{{ $key + 1 }} /
                    {{ count($album->photos) }}</div>
                <img src="https://admin.natadesign.id/{{ $photo->original }}" loading="lazy" width="550" height="550"
                    alt="{{ $photo->alt }}"
                    class="select-none aspect-square w-9/12 xs:w-screen absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <span class="text-white absolute z-20 top-3 right-0 text-4xl hover:cursor-pointer"
                    onclick="closeModal()">&times;</span>
            </div>
        @endforeach

        <!-- Next/previous controls -->
        <a class="hover:cursor-pointer text-white text-xl absolute top-1/2 translate-y-1/2 p-4 select-none"
            onclick="plusSlides(-1)">&#10094;</a>
        <a class="hover:cursor-pointer text-white text-xl absolute top-1/2 translate-y-1/2 right-0 p-4 select-none"
            onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
