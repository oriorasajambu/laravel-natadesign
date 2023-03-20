<nav class="landscape:lg:py-[57.5px] landscape:md:py-[57.5px] landscape:sm:py-5 landscape:ssm:py-5 landscape:xs:py-5 portrait:lg:py-[57.5px] portrait:md:py-[57.5px] portrait:sm:py-5 portrait:ssm:py-5 portrait:xs:py-5 lg:px-20 md:px-0 sm:px-0 relative {{$class}}">
    <div class='flex flex-wrap lg:flex-nowrap md:flex-nowrap sm:flex-nowrap ssm:flex-nowrap items-center justify-between w-full'>
        <div class="hidden w-full lg:block md:block sm:block ssm:block md:w-auto">
            <ul
                class="flex pl-0 py-4 mt-4 ssm:mt-0 sm:mt-0 lg:flex-row md:flex-row sm:flex-row lg:space-x-8 md:space-x-8 lg:mt-0 md:mt-0 lg:text-sm md:text-sm sm:text-sm lg:font-medium md:font-medium sm:font-medium lg:border-0 md:border-0 sm:border-0">
                <li>
                    <a class="block py-2 pl-0 pr-3 text-white lg:text-lg md:text-sm font-dm-sans border-b-2 border-transparent md:bg-transparent md:p-0 hover:border-white"
                        href="/" aria-label='Home' tabIndex=0>Beranda</a>
                </li>
                <li>
                    <a class="block py-2 pl-3 pr-3 text-white lg:text-lg md:text-sm font-dm-sans border-b-2 border-transparent md:bg-transparent md:p-0 hover:border-white"
                        href="/portofolio" aria-label='Portofolio' tabIndex=0>Portofolio</a>
                </li>
                <li>
                    <a class="block py-2 pl-3 pr-3 text-white lg:text-lg md:text-sm font-dm-sans border-b-2 border-transparent md:bg-transparent md:p-0 hover:border-white"
                        href="/about" aria-label='About Us' tabIndex=0>Tentang</a>
                </li>
                <li>
                    <div class="dropdown inline-block relative">
                        <button tabIndex=0
                            class="block py-2 pl-3 pr-3 text-white lg:text-lg md:text-sm font-dm-sans border-b-2 border-transparent md:bg-transparent md:p-0 hover:border-white">
                            <span class="mr-1">Informasi</span>
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-44 z-10">
                            <li>
                                <a aria-label='Articles'
                                    class="rounded-t bg-[#FFFBF2] hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap lg:text-lg md:text-sm font-dm-sans"
                                    href="/articles">Artikel
                                </a>
                            </li>
                            <li>
                                <a aria-label='Media Reviews'
                                    class="bg-[#FFFBF2] hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap lg:text-lg md:text-sm font-dm-sans"
                                    href="/media">Ulasan Media
                                </a>
                            </li>
                            <li>
                                <a aria-label='Estimate Price'
                                    class="rounded-b bg-[#FFFBF2] hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap lg:text-lg md:text-sm font-dm-sans"
                                    href="/information">Estimasi Harga
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="block py-2 pl-3 pr-3 text-white lg:text-lg md:text-sm font-dm-sans border-b-2 border-transparent md:bg-transparent md:p-0 hover:border-white"
                        href="/contact" aria-label='Contact' tabIndex=0>Kontak</a>
                </li>
            </ul>
        </div>
        <a href="/" aria-label='Homepage'
            class="flex items-center landscape:lg:h-[67px] landscape:lg:w-[67px] landscape:md:h-[67px] landscape:md:w-[67px] landscape:sm:h-[33.5px] landscape:sm:w-[33.5px] portrait:h-10 portrait:w-10 h-10 w-10 xs:ml-1 relative">
            <img src="{{ asset('assets/favicon.svg') }}" width="67" height="67" alt="Natadesign Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" onclick="openMenu()"
            class="inline-flex items-center ml-3 text-sm text-white rounded-lg lg:hidden md:hidden sm:hidden ssm:hidden"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-10 h-10 m-0 p-0" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fillRule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clipRule="evenodd"></path>
            </svg>
        </button>
    </div>
</nav>
