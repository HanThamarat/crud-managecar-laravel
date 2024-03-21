<div>
    <div class="max-w-7xl mx-auto mt-10 py-8 px-4 rounded-md bg-white">
        <div class="text-center text-3xl font-bold">
            <span>Manage User</span>
        </div>
        <form>
            <div class="flex mt-5">
                <div class="w-full mr-2">
                    <p>Name</p>
                    <input wire:model="name" type="text" id="name" class="w-full rounded-md">
                    @error('name')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full mr-2">
                    <p>Email</p>
                    <input wire:model="email" type="email" id="email" class="w-full rounded-md">
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <p>Password</p>
                    <input wire:model="password" type="password" id="password" class="w-full rounded-md">
                    @error('password')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-5">
                <x-button wire:click.prevent="createUser" class="px-5">
                    {{ __('Create User') }}
                </x-button>
            </div>
        </form>
   </div>

   <div class="max-w-7xl mx-auto mt-10 mb-5 py-8 px-4 rounded-md bg-white">
        <div class="text-2xl font-medium">
            <span>User List</span>
        </div>
        @foreach ($userLists as $lists)
            <div class="border mt-5 mb-5 px-5 py-5 rounded-md flex justify-between">
                <div>
                    <div class="font-bold">
                        <span>UserID : {{ $lists -> id }}</span>
                    </div>
                    <div class="font-bold">
                        <span>Name : {{ $lists -> name }} </span>
                    </div>
                    <div class="font-bold">
                        @if ($lists -> role === '0')
                            <span>Role : Admin </span>
                        @else
                            <span>Role : Super Admin </span>
                        @endif
                    </div>
                    <div class="font-bold">
                        @if ($lists -> status === '0')
                            <span>Status : Not Ban </span>
                        @else
                            <span>Status : Ban </span>
                        @endif
                    </div>
                </div>
                <div>
                    @include('livewire.components.user-formpopup')
                </div>
            </div>
         @endforeach
         <div class="my-5">
            {{ $userLists->links() }}
        </div>
   </div>   
</div>

