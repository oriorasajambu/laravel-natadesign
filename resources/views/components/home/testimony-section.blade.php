<div class=" bg-[#FFFBF2] pb-20 flex flex-row justify-center">
    <div
        class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0 flex flex-col items-center">
        <x-common.divider-x-component class="" />
        <div class="page-section lg:py-20 lg:px-20 md:px-20 sm:px-0 relative opacity-0">
            <div class="flex flex-col justify-between items-center py-10 lg:py-0 ">
                <p class="text-partial font-dm-sans text-center text-2xl mb-12">Apa kata
                    mereka?
                </p>
                <section class="splide grow" data-splide='{"type":"loop","perPage":1,"autoplay": true, "pagination": false, "arrows": false}' aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            {{ $slot }}
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <x-common.divider-x-component class="" />
    </div>
</div>
