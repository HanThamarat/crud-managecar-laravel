<x-button wire:click="showdatapop({{ $lists -> id }})">
    {{ 'Edit' }}
</x-button>

@if ($edit_id === $lists->id)
        <div id="form-pop" tabindex="-1" class="{{ $IsActive ? '' : 'hidden'}} flex bg-black bg-opacity-30 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-7xl max-h-full">
                <div class="relative bg-white py-8 px-4 rounded-lg shado">
                    <div class="text-center text-2xl font-medium">
                        <span>Edit user data</span>
                    </div>
                    <form>
                        <div class="flex mt-5">
                            <div class="w-full mr-2">
                                <p>Name</p>
                                <input wire:model="edit_name" type="text" id="edit_name" class="w-full rounded-md">
                                @error('edit_name')
                                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <p>Email</p>
                                <input wire:model="edit_email" type="text" id="edit_email" class="w-full rounded-md">
                                @error('edit_email')
                                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mt-5">
                            <div class="w-full mr-2">
                                <span>Role</span>
                                <select wire:model="edit_role" class="w-full rounded-lg">
                                    <option value="">Select more</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Super Admin</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <span>Status</span>
                                <select wire:model="edit_status" class="w-full rounded-lg">
                                    <option value="">Select more</option>
                                    <option value="0">Not Ban</option>
                                    <option value="1">Ban</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-5 flex">
                            <x-button wire:click.prevent="update" class="px-5 mr-2">
                                {{ __('Update data') }}
                            </x-button>
                            <x-button wire:click="closepop" class="px-5 bg-gray-700 hover:bg-blue-600">
                                {{ __('Cancel') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endif
