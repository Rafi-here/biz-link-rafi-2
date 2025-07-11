<div class=" w-full sticky px-4 bottom-0 z-10 backdrop-blur">
    <div class=" w-full max-w-[600px] mx-auto">
        <div class=" w-full py-2 grid {{ ($data->telephone && $data->whatsapp) ? 'grid-cols-2' : 'grid-cols-1' }} gap-2 sm:gap-4 text-sm sm:text-base">
            @if ($data->telephone)
                <a href="tel:{{$data->no_tlp}}" target="__blank">
                    <button style="background-color: {{$template->contact_main_color}}" class=" w-full flex items-center justify-center gap-0.5 sm:gap-1.5 py-2 text-white rounded-full hover:scale-95 duration-300">
                        <div class=" w-4 sm:w-5 aspect-square">
                            <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h256v256H0z"></path><path d="M92.5 124.8a83.6 83.6 0 0 0 39 38.9 8 8 0 0 0 7.9-.6l25-16.7a7.9 7.9 0 0 1 7.6-.7l46.8 20.1a7.9 7.9 0 0 1 4.8 8.3A48 48 0 0 1 176 216 136 136 0 0 1 40 80a48 48 0 0 1 41.9-47.6 7.9 7.9 0 0 1 8.3 4.8l20.1 46.9a8 8 0 0 1-.6 7.5L93 117a8 8 0 0 0-.5 7.8Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" class="stroke-000000"></path></svg>
                        </div>
                        <p>Telephone</p>
                    </button>
                </a>
            @endif
            @if ($data->whatsapp)
                <a href="https://wa.me/{{$data->no_tlp}}?text={{ urlencode('Halo saya dapat info dari '.url()->current()) }}" target="__blank">
                    <button style="background-color: {{$template->contact_second_color}}" class=" w-full flex items-center justify-center gap-0.5 sm:gap-1.5 py-2 text-white rounded-full hover:scale-95 duration-300">
                        <div class=" w-4 sm:w-5 aspect-square">
                            <svg viewBox="0 0 56.693 56.693" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 56.693 56.693"><path d="M46.38 10.714C41.73 6.057 35.544 3.492 28.954 3.489c-13.579 0-24.63 11.05-24.636 24.633a24.589 24.589 0 0 0 3.289 12.316L4.112 53.204l13.06-3.426a24.614 24.614 0 0 0 11.772 2.999h.01c13.577 0 24.63-11.052 24.635-24.635.002-6.582-2.558-12.772-7.209-17.428zM28.954 48.616h-.009a20.445 20.445 0 0 1-10.421-2.854l-.748-.444-7.75 2.033 2.07-7.555-.488-.775a20.427 20.427 0 0 1-3.13-10.897c.004-11.29 9.19-20.474 20.484-20.474a20.336 20.336 0 0 1 14.476 6.005 20.352 20.352 0 0 1 5.991 14.485c-.004 11.29-9.19 20.476-20.475 20.476z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" class="fill-000000"></path><path d="M40.185 33.281c-.615-.308-3.642-1.797-4.206-2.003-.564-.205-.975-.308-1.385.308-.41.617-1.59 2.003-1.949 2.414-.359.41-.718.462-1.334.154-.615-.308-2.599-.958-4.95-3.055-1.83-1.632-3.065-3.648-3.424-4.264-.36-.617-.038-.95.27-1.257.277-.276.615-.719.923-1.078.308-.36.41-.616.616-1.027.205-.41.102-.77-.052-1.078-.153-.308-1.384-3.338-1.897-4.57-.5-1.2-1.008-1.038-1.385-1.057-.359-.018-.77-.022-1.18-.022s-1.077.154-1.642.77c-.564.616-2.154 2.106-2.154 5.135 0 3.03 2.206 5.957 2.513 6.368.308.41 4.341 6.628 10.516 9.294a35.341 35.341 0 0 0 3.509 1.297c1.474.469 2.816.402 3.877.244 1.183-.177 3.642-1.49 4.155-2.927.513-1.438.513-2.67.359-2.927-.154-.257-.564-.41-1.18-.719z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" class="fill-000000"></path></svg>
                        </div>
                        <p>WhatsApp</p>
                    </button>
                </a>
            @endif
        </div>
    </div>
</div>