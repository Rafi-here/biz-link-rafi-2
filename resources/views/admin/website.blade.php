<x-layout.app>
    <div class=" h-full flex flex-col justify-center items-center">
        <form action="{{route('website.store')}}" class=" w-full" method="post" enctype="multipart/form-data">
            @csrf
            <div x-data="{ type : '{{old('type', $item->type ?? 'teks')}}' }" class=" p-4 sm:p-8 w-full space-y-4 sm:space-y-6">
                <div class=" flex items-center justify-center bg-background w-2/5 aspect-square rounded-md overflow-hidden mx-auto relative">
                    <img id="icon-preview" class="object-cover w-full" 
                        src="{{$item->icon ? asset('storage/images/'. $item->icon) : asset('assets/images/placeholder.jpg')}}" 
                        alt="Logo">
                    <div class="w-full h-full absolute z-10 top-0 opacity-0 hover:opacity-100 duration-300">
                        <label for="icon-input" class="relative">
                            <div class="w-full h-full bg-black opacity-60 flex justify-center items-center text-neutral-400">
                                <div class="w-12 aspect-square">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M0 14.2V18h3.8l11-11.1L11 3.1 0 14.2ZM17.7 4c.4-.4.4-1 0-1.4L15.4.3c-.4-.4-1-.4-1.4 0l-1.8 1.8L16 5.9 17.7 4Z" fill="currentColor" fill-rule="evenodd" class="fill-000000"></path></svg>
                                </div>
                            </div>
                            <input accept="image/*" type="file" name="icon" 
                                class="absolute bottom-0 left-0 z-0 w-40 opacity-0" 
                                id="icon-input" 
                                oninput="handleImagePreview(this, 'icon-preview')" />
                        </label>
                    </div>
                </div>

                {{-- Teks --}}
                <input type="text" name="title" placeholder="Enter Title..." value="{{old('title', $item->title ?? null)}}" class=" w-full text-sm sm:text-base font-normal rounded-md border border-main focus:ring-third focus:border-third bg-background">

                <div class=" w-full grid grid-cols-2 gap-4 sm:gap-6">
                    <div class=" flex w-full">
                        <input type="radio" class="hidden peer" value="teks" name="type" x-model="type" id="teks" checked>
                        <label for="teks" class="w-full py-2 text-center font-semibold rounded-md border border-neutral-600 text-neutral-600 peer-checked:bg-main peer-checked:border-main peer-checked:text-white duration-300">Logo (Teks)</label>
                    </div>
                    <div class=" flex w-full">
                        <input type="radio" class="hidden peer" value="image" name="type" x-model="type" id="image">
                        <label for="image" class="w-full py-2 text-center font-semibold rounded-md border border-neutral-600 text-neutral-600 peer-checked:bg-main peer-checked:border-main peer-checked:text-white duration-300">Logo (Image)</label>
                    </div>
                </div>

                {{-- Image/Logo --}}
                <div x-show="type === 'image'" class=" w-full">
                    <div class=" flex items-center justify-center bg-background w-3/4 aspect-video rounded-md overflow-hidden mx-auto relative">
                        <img id="image-preview" class="object-cover w-full" 
                            src="{{$item->image ? asset('storage/images/'. $item->image) : asset('assets/images/placeholder.jpg')}}"
                            alt="Logo">
                        <div class="w-full h-full absolute z-10 top-0 opacity-0 hover:opacity-100 duration-300">
                            <label for="image-input" class="relative">
                                <div class="w-full h-full bg-black opacity-60 flex justify-center items-center text-neutral-400">
                                    <div class="w-12 aspect-square">
                                        <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M0 14.2V18h3.8l11-11.1L11 3.1 0 14.2ZM17.7 4c.4-.4.4-1 0-1.4L15.4.3c-.4-.4-1-.4-1.4 0l-1.8 1.8L16 5.9 17.7 4Z" fill="currentColor" fill-rule="evenodd" class="fill-000000"></path></svg>
                                    </div>
                                </div>
                                <input accept="image/*" type="file" name="image" 
                                    class="absolute bottom-0 left-0 z-0 w-40 opacity-0" 
                                    id="image-input" 
                                    oninput="handleImagePreview(this, 'image-preview')" />
                            </label>
                        </div>
                    </div>
                </div>
                <button class=" text-sm sm:text-base w-full py-2 border border-neutral-600 text-neutral-600 hover:border-main hover:bg-main hover:text-white duration-300 font-semibold rounded-md">Save</button>
            </div>
        </form>
    </div>
    <script>
        function handleImagePreview(input, previewId) {
            const previewImage = document.getElementById(previewId);
            const [file] = input.files;
            if (file) {
                previewImage.src = URL.createObjectURL(file);
            }
        }
    
        // Paste event to handle all image inputs
        window.addEventListener('paste', e => {
            const [file] = e.clipboardData.files;
            if (file) {
                document.querySelectorAll('img[id$="-preview"]').forEach(img => {
                    img.src = URL.createObjectURL(file);
                });
            }
        });
    </script>
</x-layout.app>