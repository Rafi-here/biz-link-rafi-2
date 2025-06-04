@php
    $startPage = max(1, $currentPage - 1);
    $endPage = min($lastPage, $currentPage + 1);
@endphp

<div class="mt-4 flex flex-wrap justify-center gap-1 sm:gap-2 items-center">

    {{-- Tombol Start --}}
    @if ($currentPage > 1)
        <a href="{{ $url .'/'. 1 }}"
            class=" w-7 sm:w-9 aspect-square p-2 sm:p-3 rounded-md bg-neutral-100 text-neutral-600 hover:bg-main hover:text-white duration-300"
            aria-label="First Page">
            <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h256v256H0z"></path>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"
                    d="m200 208-80-80 80-80M120 208l-80-80 80-80" class="stroke-000000"></path>
            </svg>
        </a>
    @endif

    {{-- Tombol Previous --}}
    @if ($currentPage > 1)
        <a href="{{ $url .'/'. $currentPage - 1 }}"
            class="  w-7 sm:w-9 aspect-square p-2 sm:p-3 rounded-md bg-neutral-100 text-neutral-600 hover:bg-main hover:text-white duration-300"
            aria-label="Previous Page">
            <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h256v256H0z"></path>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="24" d="m160 208-80-80 80-80" class="stroke-000000"></path>
            </svg>
        </a>
    @endif

    {{-- ... Sebelum --}}
    @if ($startPage > 1)
        <span
            class="w-7 sm:w-9 aspect-square flex items-center justify-center text-start sm:text-base rounded-md text-neutral-600">...</span>
    @endif

    {{-- Halaman --}}
    @for ($i = $startPage; $i <= $endPage; $i++)
        <a href="{{ $url .'/'. $i }}" style="line heigh:0.75rem;"
            aria-label="Page - {{ $i }}"
            class="  w-7 sm:w-9 aspect-square flex items-center justify-center text-start sm:text-base rounded-md hover:bg-main hover:text-white duration-300 {{ $i == $currentPage ? 'bg-main text-white' : 'bg-neutral-100 text-neutral-600' }}">
            {{ $i }}
        </a>
    @endfor

    {{-- ... Sesudah --}}
    @if ($endPage < $lastPage)
        <span
            class="w-7 sm:w-9 aspect-square flex items-center justify-center text-start sm:text-base rounded-md text-neutral-600">...</span>
    @endif

    {{-- Tombol Next --}}
    @if ($currentPage < $lastPage)
        <a href="{{ $url .'/'. $currentPage + 1 }}"
            class="  w-7 sm:w-9 aspect-square p-2 sm:p-3 rounded-md bg-neutral-100 text-neutral-600 hover:bg-main hover:text-white duration-300"
            aria-label="Next Page">
            <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h256v256H0z"></path>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="24" d="m96 48 80 80-80 80" class="stroke-000000"></path>
            </svg>
        </a>
    @endif

    {{-- Tombol Last --}}
    @if ($currentPage < $lastPage)
        <a href="{{ $url .'/'. $lastPage }}"
            class=" w-7 sm:w-9 aspect-square p-2 sm:p-3 rounded-md bg-neutral-100 text-neutral-600 hover:bg-main hover:text-white duration-300"
            aria-label="Last Page">
            <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h256v256H0z"></path>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="24" d="m56 48 80 80-80 80M136 48l80 80-80 80" class="stroke-000000"></path>
            </svg>
        </a>
    @endif

</div>
