<div class="bg-[#FFFBF2] py-20 xs:py-10 flex flex-row xs:flex-col items-center justify-center">
    <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
        <div class="flex flex-row xs:flex-col justify-between gap-12">
            <div class="flex flex-col gap-12">
                <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col justify-between gap-12">
                    <div class="flex flex-row xs:flex-col xs:gap-6 flex-1 border-b-[1px] border-primary pb-12 ">
                        <p
                            class="text-partial font-dm-sans font-bold lg:text-xl lg:basis-1/3 md:basis-1/4 sm:basis-1/5 xs:text-center">
                            Alamat</p>
                        <div
                            class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 sm:basis-4/5 xs:text-center">
                            {!! $contact->address !!}
                        </div>
                    </div>
                    <div class="flex flex-row xs:flex-col xs:gap-6 flex-1 border-b-[1px] border-primary pb-12">
                        <p
                            class="text-partial font-dm-sans font-bold lg:text-xl lg:basis-1/3 md:basis-1/4 basis-1/5 xs:text-center">
                            Lokasi</p>
                        <div
                            class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 basis-4/5 xs:text-center">
                            {!! $contact->location !!}
                        </div>
                    </div>
                </div>
                <div
                    class="flex lg:flex-row md:flex-col-reverse sm:flex-col-reverse xs:flex-col-reverse justify-between gap-12">
                    <div class="flex flex-col flex-1 gap-12 lg:gap-12">
                        <div class="flex flex-row xs:flex-col xs:gap-6 grow border-b-[1px] border-primary pb-12">
                            <p
                                class="text-partial font-dm-sans font-bold lg:text-xl lg:basis-1/3 md:basis-1/4 basis-1/5 xs:text-center">
                                Kontak
                            </p>
                            <div
                                class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 basis-4/5 xs:text-center">
                                {!! $contact->contact !!}
                            </div>
                        </div>
                        <div
                            class="flex flex-row xs:flex-col xs:gap-6 content-start grow border-b-[1px] border-primary pb-12">
                            <div
                                class="lg:h-12 md:h-12 h-12 relative self-start xs:self-center lg:basis-1/3 md:basis-1/4 basis-1/5">
                                <img width="48" height="48" src={{ asset('assets/icon_info.svg') }}
                                    alt="Logo Information" />
                            </div>
                            <div
                                class="font-dm-sans text-partial leading-8 lg:text-xl lg:basis-2/3 md:basis-3/4 basis-4/5">
                                {!! $contact->info !!}
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 h-full min-h-[360px] xs:hidden">
                        <div style=" position: relative; textAlign: right; height: 100%; width: 100%;">
                            <div style="overflow: hidden; background: none !important; height: 100%; width: 100%;">
                                <iframe width="100%" height="100%" id="gmap_canvas"
                                    title="Nat.A Design Google Map Location" src="{{ $contact->map }}"
                                    style="border: 0; overflow: hidden; margin: 0 0;">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-12">
                    <div class="flex flex-col flex-1 gap-12 lg:gap-12">
                        <div
                            class="flex flex-row xs:flex-col h-[101.80px] xs:gap-6 border-b-[1px] border-primary pb-12">
                            <p
                                class="text-partial font-dm-sans font-bold lg:text-xl grow-0 lg:basis-1/3 md:basis-1/4 basis-1/5 xs:text-center">
                                Temukan <br class="block xs:hidden" /> Kami</p>
                            <div
                                class="flex flex-row content-center xs:justify-center gap-6 w-full lg:basis-2/3 md:basis-3/4 basis-4/5 mt-1">
                                <div class="text-partial h-8">
                                    <a aria-label="Facebook" href="https://www.facebook.com/nataproduct" target="_blank"
                                        rel="external">
                                        <i class="fa-brands fa-facebook-f fa-lg"></i>
                                    </a>
                                </div>
                                <div class="text-partial h-8">
                                    <a aria-label="Instagram" href="https://www.instagram.com/nat.adesign"
                                        target="_blank" rel="external">
                                        <i class="fa-brands fa-instagram fa-lg"></i>
                                    </a>
                                </div>
                                <div class="text-partial h-8">
                                    <a aria-label="Tiktok" href="https://www.tiktok.com/@nat.adesign" target="_blank"
                                        rel="external">
                                        <i class="fa-brands fa-tiktok fa-lg"></i>
                                    </a>
                                </div>
                                <div class="text-partial h-8">
                                    <a aria-label="Whatsapp" href="https://wa.me/6281212301500" target="_blank"
                                        rel="external">
                                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6 lg:gap-12 flex-1">
                            <p class="text-partial font-dm-sans font-bold text-xl xs:text-center">Subsidiary</p>
                            <div class="flex flex-row xs:flex-1 xs:gap-6 gap-12 items-center h-[90px]">
                                <div class="w-[67px] h-[52px]">
                                    <img src={{ asset('assets/oiji_icon.png') }} width="67" height="52" alt="Logo Oiji" />
                                </div>
                                <div class="w-0.5 bg-partial h-[90px] xs:hidden">
                                </div>
                                <div
                                    class="grow font-dm-sans text-partial text-xl leading-normal flex-1 xs:text-center">
                                    <p>Brand Designers & <br class="lg:block hidden" /> Social Media Consultant</p>
                                </div>
                            </div>
                            <div class="flex flex-row xs:flex-1 xs:gap-6 gap-12 items-center h-[90px]">
                                <div class="w-[67px] h-[70px]">
                                    <img src={{ asset('assets/A_icon.png') }} width="67" height="70" alt="Logo Andara" />
                                </div>
                                <div class="w-0.5 bg-partial h-[90px] xs:hidden">
                                </div>
                                <div
                                    class="grow font-dm-sans text-partial text-xl leading-normal flex-1 xs:text-center">
                                    <p>Architecture & Interiors,
                                        <br class="lg:block hidden" />
                                        Custom Furniture,
                                        <br class="lg:block hidden" />
                                        Home Decoration
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="formSendContact" class="flex-1 grid grid-cols-1 gap-6"
                        action="{{ route('send.contact') }}" method="POST">
                        <x-common.input-component class="" id="1" label="Nama Lengkap"
                            placeHolder="Nama Lengkap" type="text" name="name" isTextArea='false' />
                        <x-common.input-component class="" id="2" label="Email"
                            placeHolder="Alamat Email" type="email" name="email" isTextArea='false' />
                        <x-common.input-component class="" id="3" label="Pertanyaan"
                            placeHolder="Apa ada pertanyaan yang ingin Anda tanyakan? Tim Terbaik kami siap untuk membantu."
                            type="text" name="question" isTextArea='true' />
                        <div class="flex flex-row justify-between">
                            <button type="submit" id="btnSendContact"
                                class="border-2 border-[#707070] text-center my-6 py-6 px-10 text-partial font-dm-sans font-bold lg:text-xl text-base">
                                <div id="default-button-contact"><span>Kirim</span></div>
                                <div id="loading-button-contact" class="hidden">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
