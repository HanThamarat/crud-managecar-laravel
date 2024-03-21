<x-app-layout>
    @if (Gate::allows('isAdmin'))
        @livewire('manage-user')
    @endif
</x-app-layout>