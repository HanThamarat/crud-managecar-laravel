@if ($UserRole === '1')
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link href="{{ route('managecar') }}" :active="request()->routeIs('managecar')">
            {{ __('Manage Car') }}
        </x-nav-link>
        <x-nav-link href="{{ route('manageuser') }}" :active="request()->routeIs('manageuser')">
            {{ __('Manage User') }}
        </x-nav-link>
    </div>
@else
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link href="{{ route('managecar') }}" :active="request()->routeIs('managecar')">
            {{ __('Manage Car') }}
        </x-nav-link>
    </div>
@endif
