@extends("layout")
@section("head")
    <x-custom-head-component :seo="$seo" />
@endsection
@section("content")
    <div class="flex flex-col justify-start">
        <div class="w-full flex flex-row justify-center bg-primary">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] flex flex-col justify-between">
                <x-top-bar-component class="bg-primary" />
            </div>
        </div>
        <div class="w-full flex flex-row justify-center lg:pb-20 pb-10 bg-[#FFFBF2]">
            <div class="lg:w-[1200px] md:w-[864px] sm:w-[608px] ssm:w-full ssm:px-10 xs:w-[280px] lg:px-20 md:px-0 sm:px-0">
                <div class="grid grid-flow-row">
                    <div class="flex flex-row justify-between items-center py-14">
                        <x-common.subtitle-component class="uppercase text-primary">
                            Portofolio
                        </x-common.subtitle-component>
                    </div>
                    <x-common.divider-x-component class="" />
                    <x-common.project-component :albums='$albums->items()' />
                    {{ $albums->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>

        <x-common.article-section class="" classTitle="text-primary" title="Postingan Terbaru" pathName="articles">
            <x-common.article-component :articles="$articles"/>
        </x-common.article-section>

        <x-common.contact-section :contact="$contact" />

        <x-common.footer-section />
    </div>
@endsection
@section("scripts")
@endsection
