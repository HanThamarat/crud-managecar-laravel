<div>
    {{-- form create car --}}
    <div class="max-w-7xl mx-auto mt-10 py-8 px-4 rounded-md bg-white">
        <div class="text-center text-2xl font-medium">
            <span>Manage Car</span>
        </div>
        <form>
            <div class="flex mt-5">
                <div class="w-full mr-2">
                    <p>Car name</p>
                    <input wire:model="car_name" type="text" id="car_name" class="w-full rounded-md">
                    @error('car_name')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <p>From price</p>
                    <input wire:model="from_price" type="text" id="from_price" class="w-full rounded-md">
                    @error('from_price')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-5">
                <p>Car detail</p>
                <textarea wire:model="car_detail" name="" id="car_detail" rows="5" class="w-full rounded-md"></textarea>
                @error('car_detail')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>
            <div wire:model="car_images">
                @if ($car_images)
                <div class="border w-96 bg-gray-100 rounded-lg">
                    <img src="{{ $car_images->temporaryUrl() }}" alt="Preview">
                </div>
                @else
                    <div class="flex items-center justify-center w-full">
                        <label for="car_images" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input type="file" class="hidden" wire:model="car_images" id="car_images" accept="image/png image/jpeg" />
                            @error('car_images')
                            <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                        </label>
                    </div> 
                @endif
            </div>
            <div class="mt-5">
                <x-button wire:click.prevent="create" class="px-5">
                    {{ __('Create Car') }}
                </x-button>
            </div>
        </form>
   </div>

   <div class="max-w-7xl mx-auto mt-5 py-8 px-4 rounded-md bg-white">
        <div class="text-2xl font-medium">
            <span>Car Lists</span>
        </div>
        <div class="mt-5" id="cars-lists">
           
            
           
            @foreach ( $carLists as $lists )
            <div class="border rounded-md mt-5">
                <div class="flex">
                    <div class="bg-gray-100 rounded-md w-1/3">
                        <img src="{{ asset('storage/' . $lists->car_images) }}" alt="">
                    </div>
                    <div class="w-2/3">
                        <div class="px-4 py-2 font-medium text-2xl">
                            <span> {{ $lists->car_name }}</span>
                        </div>
                        <div class="px-4 py-2 font-medium text-base">
                            <span>เริ่มต้น {{ $lists->from_price }} บาท</span>
                        </div>
                        <div class="px-4 py-2 font-medium text-base">
                            <span>รายละเอียด : {{ $lists->car_detail }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
   </div>
</div>
