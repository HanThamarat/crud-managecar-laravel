@if ($editcar_id === $lists->id)
    <div id="form-pop" tabindex="-1" class="flex hidden bg-black bg-opacity-30 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-7xl max-h-full">
            <div class="relative bg-white py-8 px-4 rounded-lg shado">
                <div class="text-center text-2xl font-medium">
                    <span>Edit car data</span>
                </div>
                <form>
                    <div class="flex mt-5">
                        <div class="w-full mr-2">
                            <p>Car name</p>
                            <input wire:model="editcar_name" type="text" id="editcar_name" class="w-full rounded-md">
                            @error('editcar_name')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <p>From price</p>
                            <input wire:model="editfrom_price" type="text" id="editfrom_price" class="w-full rounded-md">
                            @error('editfrom_price')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>Car detail</p>
                        <textarea wire:model="editcar_detail" name="" id="editcar_detail" rows="5" class="w-full rounded-md"></textarea>
                        @error('editcar_detail')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5 flex">
                        <x-button wire:click.prevent="update" class="px-5 mr-2">
                            {{ __('Update data') }}
                        </x-button>
                        <x-button onclick="hiddenformPop()" class="px-5 bg-gray-700 hover:bg-blue-600">
                            {{ __('Cancel') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

<script>
    function formPop() {
        let formpopup = document.getElementById('form-pop');
        let more = document.getElementById('dropdownDotsHorizontal');
        more.classList.add('hidden');
        formpopup.classList.remove('hidden');
    }

    function hiddenformPop() {
        let formpopup = document.getElementById('form-pop');
        formpopup.classList.add('hidden');
    }
</script>