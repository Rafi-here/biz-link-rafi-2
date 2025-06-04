{{-- Footer --}}
<div class=" w-full">
    {{ $additional ?? '' }}
    <div class=" w-full bg-main pt-10 pb-6 divide-y-2 divide-white space-y-6">
        <div class=" w-full px-4 md:px-8 py-4">
            <div class=" w-full max-w-[1080px] mx-auto grid grid-cols-2 md:grid-cols-3 gap-6 text-white">
                <div class=" col-span-2 md:col-span-1 space-y-2">
                    <a href="{{route('home')}}" class="">
                        <div class=" w-full h-10 sm:h-12 text-3xl sm:text-4xl font-bold text-white flex items-start overflow-hidden">
                            @if (optional(json_decode(\Storage::get('website.json'), true))['type'] ?? null === 'teks')
                                <p class=" text-nowrap">{{json_decode(\Storage::get('website.json'), true)['title']}}</p>
                            @elseif (optional(json_decode(\Storage::get('website.json'), true))['type'] ?? null === 'image')
                                <img src="{{asset('storage/images/'. json_decode(\Storage::get('website.json'), true)['image'])}}" class=" object-contain max-h-full max-w-full" alt="">
                            @endif
                        </div>
                    </a>
                    <p class=" text-sm">Silahkan Pilih Design Sesuai selera dan bisnis anda, Jadikan Bisnis anda Lebih menarik dan Lebih mudah diingat oleh customer</p>
                </div>
                <div class=" space-y-4">
                    <div class=" flex flex-row gap-2">
                        <div class=" w-1 rounded-full bg-white"></div>
                        <p class=" font-semibold">Tautan Cepat</p>
                    </div>
                    <div class=" text-white flex flex-col gap-2 text-sm pl-4">
                        <a href="{{route('home')}}" class=" list-item hover:underline duration-300">Beranda</a>
                        <a href="{{route('article')}}" class=" list-item hover:underline duration-300">Artikel</a>
                        <a href="" class=" list-item hover:underline duration-300">Kontak</a>
                    </div>
                </div>
                <div class=" space-y-4">
                    <div class=" flex flex-row gap-2">
                        <div class=" w-1 rounded-full bg-white"></div>
                        <p class=" font-semibold">Social Media</p>
                    </div>
                    <div class=" text-white flex flex-col gap-2 text-sm pl-4">
                        <a href="{{route('home')}}" class=" list-item hover:underline duration-300">Instagram</a>
                        <a href="{{route('article')}}" class=" list-item hover:underline duration-300">Youtube</a>
                        <a href="" class=" list-item hover:underline duration-300">Tiktok</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" text-center text-white pt-6">
            <p class="text-sm">
                © 2025 bizlink.sites.id | Developed by
                <span class="hover:underline">
                    <a href="https://jasawebsite.biz" target="_blank">
                        Jasawebsitebiz
                    </a>
                </span>
            </p>
        </div>
    </div>
</div>