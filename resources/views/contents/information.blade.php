@extends('layout')
@section('head')
    <x-custom-head-component :seo="$seo" />
@endsection
@section('content')
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
                    <form id="formInquiryPrice" action="{{ route('inquiry.price') }}" method="POST"
                        class="lg:grid lg:grid-cols-2 flex flex-col gap-x-20 gap-y-6 pt-10">
                        <x-common.divider-x-component class="" />
                        <x-common.divider-x-component class="lg:block hidden" />

                        <x-common.input-component class="" id="1" label="Nama Lengkap"
                            placeHolder="Nama Lengkap" type="text" name="name" isTextArea="false" />

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
                            type="text" name="info" isTextArea="true" />

                        <div class="flex flex-row xs:flex-col justify-between col-span-2 my-6">
                            <button id="btnInquiryPrice" type="submit"
                                class="border-2 border-[#707070] text-center py-6 px-10 text-partial font-dm-sans font-bold
                                lg:text-xl text-base">
                                <div id="default-button"><span>Kirim</span></div>
                                <div id="loading-button" class="hidden">
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <style>
                                            .spinner_zWVm {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_PnZo 1.2s linear infinite
                                            }

                                            .spinner_gfyD {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_4j7o 1.2s linear infinite;
                                                animation-delay: .1s
                                            }

                                            .spinner_T5JJ {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_fLK4 1.2s linear infinite;
                                                animation-delay: .1s
                                            }

                                            .spinner_E3Wz {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_tDji 1.2s linear infinite;
                                                animation-delay: .2s
                                            }

                                            .spinner_g2vs {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_CMiT 1.2s linear infinite;
                                                animation-delay: .2s
                                            }

                                            .spinner_ctYB {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_cHKR 1.2s linear infinite;
                                                animation-delay: .2s
                                            }

                                            .spinner_BDNj {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_Re6e 1.2s linear infinite;
                                                animation-delay: .3s
                                            }

                                            .spinner_rCw3 {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_EJmJ 1.2s linear infinite;
                                                animation-delay: .3s
                                            }

                                            .spinner_Rszm {
                                                animation: spinner_5QiW 1.2s linear infinite, spinner_YJOP 1.2s linear infinite;
                                                animation-delay: .4s
                                            }

                                            @keyframes spinner_5QiW {

                                                0%,
                                                50% {
                                                    width: 7.33px;
                                                    height: 7.33px
                                                }

                                                25% {
                                                    width: 1.33px;
                                                    height: 1.33px
                                                }
                                            }

                                            @keyframes spinner_PnZo {

                                                0%,
                                                50% {
                                                    x: 1px;
                                                    y: 1px
                                                }

                                                25% {
                                                    x: 4px;
                                                    y: 4px
                                                }
                                            }

                                            @keyframes spinner_4j7o {

                                                0%,
                                                50% {
                                                    x: 8.33px;
                                                    y: 1px
                                                }

                                                25% {
                                                    x: 11.33px;
                                                    y: 4px
                                                }
                                            }

                                            @keyframes spinner_fLK4 {

                                                0%,
                                                50% {
                                                    x: 1px;
                                                    y: 8.33px
                                                }

                                                25% {
                                                    x: 4px;
                                                    y: 11.33px
                                                }
                                            }

                                            @keyframes spinner_tDji {

                                                0%,
                                                50% {
                                                    x: 15.66px;
                                                    y: 1px
                                                }

                                                25% {
                                                    x: 18.66px;
                                                    y: 4px
                                                }
                                            }

                                            @keyframes spinner_CMiT {

                                                0%,
                                                50% {
                                                    x: 8.33px;
                                                    y: 8.33px
                                                }

                                                25% {
                                                    x: 11.33px;
                                                    y: 11.33px
                                                }
                                            }

                                            @keyframes spinner_cHKR {

                                                0%,
                                                50% {
                                                    x: 1px;
                                                    y: 15.66px
                                                }

                                                25% {
                                                    x: 4px;
                                                    y: 18.66px
                                                }
                                            }

                                            @keyframes spinner_Re6e {

                                                0%,
                                                50% {
                                                    x: 15.66px;
                                                    y: 8.33px
                                                }

                                                25% {
                                                    x: 18.66px;
                                                    y: 11.33px
                                                }
                                            }

                                            @keyframes spinner_EJmJ {

                                                0%,
                                                50% {
                                                    x: 8.33px;
                                                    y: 15.66px
                                                }

                                                25% {
                                                    x: 11.33px;
                                                    y: 18.66px
                                                }
                                            }

                                            @keyframes spinner_YJOP {

                                                0%,
                                                50% {
                                                    x: 15.66px;
                                                    y: 15.66px
                                                }

                                                25% {
                                                    x: 18.66px;
                                                    y: 18.66px
                                                }
                                            }
                                        </style>
                                        <rect class="spinner_zWVm" x="1" y="1" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_gfyD" x="8.33" y="1" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_T5JJ" x="1" y="8.33" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_E3Wz" x="15.66" y="1" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_g2vs" x="8.33" y="8.33" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_ctYB" x="1" y="15.66" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_BDNj" x="15.66" y="8.33" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_rCw3" x="8.33" y="15.66" width="7.33"
                                            height="7.33" />
                                        <rect class="spinner_Rszm" x="15.66" y="15.66" width="7.33"
                                            height="7.33" />
                                    </svg>
                                    <span class="ml-3">Mengirim . . .</span>
                                </div>
                            </button>
                            <div class="flex flex-col justify-between items-end xs:items-center xs:gap-6 xs:mt-6">
                                <h4 class="text-xl text-partial font-dm-sans font-bold">Temukan Kami</h4>
                                <div class="flex justify-end gap-6">
                                    <div class="text-partial h-6">
                                        <a aria-label="Facebook" href="https://www.facebook.com/nataproduct"
                                            target="_blank" rel="external">
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
@section('scripts')
    <script>
        $(document).ready(function() {
            const formId = "#formInquiryPrice";
            $(formId).submit(function(event) {
                $("#btnInquiryPrice").prop('disabled', true);
                $("#default-button").addClass('hidden');
                $("#loading-button").removeClass('hidden');
                $("#loading-button").addClass('inline-flex');
                let formData = {
                    name: $(formId).find("input[name=name]").val(),
                    phone: $(formId).find("input[name=phone]").val(),
                    email: $(formId).find("input[name=email]").val(),
                    type: $(formId).find("input[name=type]").val(),
                    size: $(formId).find("input[name=size]").val(),
                    location: $(formId).find("input[name=location]").val(),
                    job: $(formId).find("input[name=job]").val(),
                    time: $(formId).find("input[name=time]").val(),
                    info: $(formId).find("textarea[name=info]").val(),
                }

                $.ajax({
                    method: 'POST',
                    url: "{{ route('inquiry.price') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(data) {
                        $("#btnInquiryPrice").removeAttr('disabled');
                        $("#loading-button").removeClass('inline-flex');
                        $("#loading-button").addClass('hidden');
                        $("#default-button").removeClass('hidden');
                        if (data.code == 200 && data.success) {
                            //TODO Show Notif Success
                            $(formId).each(function() {
                                this.reset();
                            });
                        } else {
                            //TODO Show Notif Failed
                        }
                    }
                });

                event.preventDefault();
            });
        })
    </script>
@endsection
