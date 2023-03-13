@extends("layout")
@section("head")
    <x-custom-head-component :seo="$seo" />
@endsection
@section("content")
    <div class="flex flex-col justify-start">
        <div class="w-full flex flex-row justify-center bg-primary">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] flex flex-col justify-between">
                <x-top-bar-component class="bg-primary" />
            </div>
        </div>
        <div class="w-full flex flex-row justify-center bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <div class="grid grid-cols-1 grid-flow-row">
                    <div class="flex flex-row justify-between items-center pt-14">
                        <x-common.subtitle-component
                            class="text-primary uppercase font-dm-sans font-bold text-4xl lg:text-[48px] md:text-5xl leading-tight">
                            Estimasi Harga
                        </x-common.subtitle-component>
                    </div>
                    <form action="" class="lg:grid lg:grid-cols-2 flex flex-col gap-x-20 gap-y-6 pt-10">
                        <x-common.divider-x-component class="" />
                        <x-common.divider-x-component class="lg:block hidden" />

                        <x-common.input-component class="" id="1" label="Nama Lengkap"
                            placeHolder="Nama Lengkap" type="text" name="text" isTextArea="false" />

                        <x-common.input-component class="" id="2" label="Nomor HP / WhatsApp"
                            placeHolder="0812 3456 7890" type="text" name="phone" isTextArea="false" />

                        <x-common.input-component class="" id="3" label="Email"
                            placeHolder="emailanda@gmail.com" type="email" name="email" isTextArea="false" />

                        <x-common.input-component class="" id="4" label="Jenis"
                            placeHolder="Café / Restoran / Coffee Shop / dll" type="text" name="type"
                            isTextArea="false" />

                        <x-common.input-component class="" id="5" label="Ukuran" placeHolder="Dalam satuan m2"
                            type="text" name="size" isTextArea="false" />

                        <x-common.input-component class="" id="6" label="Lokasi" placeHolder="Nama Kota"
                            type="text" name="location" isTextArea="false" />

                        <x-common.input-component class="" id="7" label="Pengerjaan"
                            placeHolder="Konstruksi atau Renovasi" type="text" name="job" isTextArea="false" />


                        <x-common.input-component class="" id="8" label="Estimasi Waktu" placeHolder="3 Bulan"
                            type="text" name="time" isTextArea="false" />

                        <x-common.input-component class="col-span-2" id="9" label="Informasi Tambahan"
                            placeHolder="Untuk mempercepat proses estimasi harga, mohon berikan rincian deskripsi proyek Anda secara detail dan lengkap. Terima kasih."
                            type="text" name="additional_info" isTextArea="true" />

                        <div class="flex flex-row xs:flex-col justify-between col-span-2 my-6">
                            <button
                                class="border-2 border-[#707070] text-center py-6 px-10 text-partial font-dm-sans font-bold
                                lg:text-xl text-base">
                                Kirim Pesan
                            </button>
                            <div class="flex flex-col justify-between items-end xs:items-center xs:gap-6 xs:mt-6">
                                <h4 class="text-xl text-partial font-dm-sans font-bold">Temukan Kami</h4>
                                <div class="flex justify-end gap-6">
                                    <div class="text-partial h-6">
                                        <a aria-label="Facebook" href="https://www.facebook.com/nataproduct" target="_blank"
                                            rel="external">
                                            <i class="fa-brands fa-facebook-f fa-lg"></i>
                                        </a>
                                    </div>
                                    <div class="text-partial h-6">
                                        <a aria-label="Instagram" href="https://www.instagram.com/nat.adesign"
                                            target="_blank" rel="external">
                                            <i class="fa-brands fa-instagram fa-lg"></i>
                                        </a>
                                    </div>
                                    <div class="text-partial h-6">
                                        <a aria-label="Tiktok" href="https://www.tiktok.com/@nat.adesign" target="_blank"
                                            rel="external">
                                            <i class="fa-brands fa-tiktok fa-lg"></i>
                                        </a>
                                    </div>
                                    <div class="text-partial h-6">
                                        <a aria-label="Whatsapp" href="https://wa.me/6281212301500" target="_blank"
                                            rel="external">
                                            <i class="fa-brands fa-whatsapp fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <x-common.divider-x-component class="col-span-2" />
                    </form>
                </div>
            </div>
        </div>

        <x-common.project-section class="" classTitle="text-primary text-start leading-none" :showButton=true>
            <x-common.project-component :albums="$albums" />
            <a aria-label="See Our Portofolio" href="/portofolio"
                class="border-2 border-[#707070] text-center mt-6 py-6 text-partial font-dm-sans font-bold lg:text-xl text-base">
                Selengkapnya
            </a>
        </x-common.project-section>

        <x-common.article-section class="" classTitle="text-primary" title="Postingan Terbaru"
            pathName="articles">
            <x-common.article-component :articles="$articles" />
        </x-common.article-section>

        <x-common.contact-section :contact="$contact" />

        <x-common.footer-section />
    </div>
@endsection
@section("scripts")
@endsection
