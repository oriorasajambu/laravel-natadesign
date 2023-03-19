<div id="lightShowModal" style="display: none" class="fixed z-10 left-0 top-0 w-screen h-screen overflow-hidden bg-black">
    <span class="text-white absolute top-3 right-6 text-4xl hover:cursor-pointer" onclick="closeModal()">&times;</span>
    <div class="relative bg-slate-500 m-auto p-0 w-11/12 max-w-7xl">
        @foreach ($album->photos as $key => $photo)
            <div style="display: none" class="modal-slide">
                <div class="text-white font-dm-sans absolute top-0 px-1 py-4">{{ $key + 1 }} / 4</div>
                <img src="https://admin.natadesign.id/{{ $photo->original }}" loading="lazy" width="550" height="550"
                    alt="{{ $photo->alt }}" style="width:100%" class="select-none">
            </div>
        @endforeach

        <!-- Next/previous controls -->
        <a class="hover:cursor-pointer text-white text-xl absolute top-1/2 p-4 select-none"
            onclick="plusSlides(-1)">&#10094;</a>
        <a class="hover:cursor-pointer text-white text-xl absolute top-1/2 right-0 p-4 select-none"
            onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="text-center bg-black text-white px-1 py-4">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        @foreach ($album->photos as $key => $photo)
            <div class="float-left w-1/4">
                <img class="demo opacity-60 hover:opacity-100" src="https://admin.natadesign.id/{{ $photo->original }}"
                    loading="lazy" width="550" height="550" alt="{{ $photo->alt }}" style="width:100%"
                    class="select-none" onclick="currentSlide({{ $key + 1 }})">
            </div>
        @endforeach
    </div>
</div>
