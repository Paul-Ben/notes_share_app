<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Note') }}
        </h2>  
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-1 max-w-2xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}
                <div class="float-start py-7">
                    <x-button.circle primary icon="arrow-left" label="Back" href="{{route('notes.index')}}"></x-button.circle>
                    </div>
                <div class="p-6 text-center text-gray-900">
                    
                    <h1 class="text-bold text-2xl">{{ __("Create Note!!!") }}</h1>
                    @livewire('notes.create-note')
                    
                </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
