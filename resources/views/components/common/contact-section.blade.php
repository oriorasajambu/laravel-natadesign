<div class="bg-[#FFFBF2] py-20 xs:py-10 flex flex-row xs:flex-col items-center justify-center">
    <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
        <div class="flex flex-row xs:flex-col justify-between gap-12">
            <div class="flex flex-col gap-12">
                <div class="flex lg:flex-row md:flex-col sm:flex-col ssm:flex-col xs:flex-col justify-between gap-12">
                    <div class="flex flex-row xs:flex-col xs:gap-6 flex-1 border-b-[1px] border-primary pb-12 ">
                        <p
                            class="text-partial font-dm-sans font-bold lg:text-xl lg:basis-1/3 md:basis-1/4 sm:basis-1/5 ssm:basis-1/5 xs:text-center">
                            Alamat
                        </p>
                        <div
                            class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 sm:basis-4/5 ssm:basis-4/5 xs:text-center">
                            {!! $contact->address !!}
                        </div>
                    </div>
                    <div class="flex flex-row xs:flex-col xs:gap-6 flex-1 border-b-[1px] border-primary pb-12">
                        <p
                            class="text-partial font-dm-sans font-bold lg:text-xl lg:basis-1/3 md:basis-1/4 sm:basis-1/5 ssm:basis-1/5 xs:text-center">
                            Lokasi
                        </p>
                        <div
                            class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 sm:basis-4/5 ssm:basis-4/5 xs:text-center">
                            {!! $contact->location !!}
                        </div>
                    </div>
                </div>
                <div
                    class="flex lg:flex-row md:flex-col-reverse sm:flex-col-reverse ssm:flex-col-reverse xs:flex-col-reverse justify-between gap-12">
                    <div class="flex flex-col flex-1 gap-12 lg:gap-12">
                        <div class="flex flex-row xs:flex-col xs:gap-6 grow border-b-[1px] border-primary pb-12">
                            <p
                                class="text-partial font-dm-sans font-bold lg:text-xl lg:basis-1/3 md:basis-1/4 sm:basis-1/5 ssm:basis-1/5 xs:basis-1/5 xs:text-center">
                                Kontak
                            </p>
                            <div
                                class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 sm:basis-4/5 ssm:basis-4/5 xs:basis-4/5 xs:text-center">
                                {!! $contact->contact !!}
                            </div>
                        </div>
                        <div
                            class="flex flex-row xs:flex-col xs:gap-6 content-start grow border-b-[1px] border-primary pb-12">
                            <div
                                class="w-12 h-12 self-start xs:self-center lg:basis-1/3 md:basis-1/4 sm:basis-1/5 ssm:basis-1/5 xs:basis-1/5">
                                <img width="48" height="48" src={{ asset('assets/icon_info.svg') }}
                                    alt="Logo Information" loading="lazy" />
                            </div>
                            <div
                                class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 sm:basis-4/5 ssm:basis-4/5 xs:basis-4/5 leading-8">
                                {!! $contact->info !!}
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 h-full min-h-[360px] xs:hidden">
                        <div style="position: relative; textAlign: right; height: 100%; width: 100%;">
                            <div style="overflow: hidden; background: none !important; height: 100%; width: 100%;">
                                <iframe width="100%" height="100%" id="gmap_canvas" loading="lazy"
                                    title="Nat.A Design Google Map Location" src="{{ $contact->map }}"
                                    style="border: 0; overflow: hidden; margin: 0 0;">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex lg:flex-row md:flex-col sm:flex-col ssm:flex-col xs:flex-col gap-12">
                    <div class="flex flex-col flex-1 gap-12 lg:gap-12">
                        <div
                            class="flex flex-row xs:flex-col h-[101.80px] xs:gap-6 border-b-[1px] border-primary pb-12">
                            <p
                                class="text-partial font-dm-sans font-bold lg:text-xl grow-0 lg:basis-1/3 md:basis-1/4 basis-1/5 xs:text-center">
                                Temukan <br class="block xs:hidden" /> Kami
                            </p>
                            <div
                                class="flex flex-row content-center xs:justify-center gap-6 w-full lg:basis-2/3 md:basis-3/4 basis-4/5 mt-1">
                                <div class="text-partial h-8">
                                    <a aria-label="Facebook" href="https://www.facebook.com/nataproduct" target="_blank"
                                        rel="external">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="21"
                                            viewBox="0 0 320 512">
                                            <path fill="#404040"
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="text-partial h-8">
                                    <a aria-label="Instagram" href="https://www.instagram.com/nat.adesign"
                                        target="_blank" rel="external">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="21"
                                            viewBox="0 0 448 512">
                                            <path fill="#404040"
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="text-partial h-8">
                                    <a aria-label="Tiktok" href="https://www.tiktok.com/@nat.adesign" target="_blank"
                                        rel="external">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="21"
                                            viewBox="0 0 448 512">
                                            <path fill="#404040"
                                                d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="text-partial h-8">
                                    <a aria-label="Whatsapp" href="https://wa.me/6281212301500" target="_blank"
                                        rel="external">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="21"
                                            viewBox="0 0 448 512">
                                            <path fill="#404040"
                                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6 lg:gap-12 flex-1">
                            <p class="text-partial font-dm-sans font-bold lg:text-xl xs:text-center">Subsidiary</p>
                            <div class="flex flex-row xs:flex-1 xs:gap-6 gap-12 items-center h-[90px]">
                                <a class="w-[67px] h-[52px]" aria-label="Oiji Instagram" href="https://www.instagram.com/oijiistudio/">
                                    <img src={{ asset('assets/oiji_icon.png') }} width="67" height="52"
                                        alt="Logo Oiji" loading="lazy" />
                                </a>
                                <div class="w-0.5 bg-partial h-[90px] xs:hidden">
                                </div>
                                <div class="grow flex-1">
                                    <p class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 sm:basis-4/5 ssm:basis-4/5 xs:basis-4/5 leading-8">Brand Designers & <br class="lg:block hidden" /> Social Media Consultant</p>
                                </div>
                            </div>
                            <div class="flex flex-row xs:flex-1 xs:gap-6 gap-12 items-center h-[90px]">
                                <a class="w-[67px] h-[70px]" aria-label="Andara Instagram" href="https://www.instagram.com/andaragroup/">
                                    <img src={{ asset('assets/A_icon.png') }} width="67" height="70"
                                        alt="Logo Andara" loading="lazy" />
                                </a>
                                <div class="w-0.5 bg-partial h-[90px] xs:hidden">
                                </div>
                                <div class="grow flex-1">
                                    <p class="font-dm-sans text-partial lg:text-xl lg:basis-2/3 md:basis-3/4 sm:basis-4/5 ssm:basis-4/5 xs:basis-4/5 leading-8">Architecture & Interiors,
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
                        <x-common.input-component class="" id="contactName" label="Nama Lengkap"
                            placeHolder="Nama Lengkap" type="text" name="name" isTextArea='false' />
                        <x-common.input-component class="" id="contactEmail" label="Email"
                            placeHolder="Alamat Email" type="email" name="email" isTextArea='false' />
                        <x-common.input-component class="" id="contactQuestion" label="Pertanyaan"
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
