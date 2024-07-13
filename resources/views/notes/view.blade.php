<x-guest-layout>
    <div class="flex justify-between">
        <h1 class="text-x1 font-semibold leading-tight text-gray-800">{{$note->title}}</h1>     
        
    </div>
    <p class="mt-4 mb-12 text-xs">{{$note->body}}</p>
    <div class="flex items-center justify-end mt-12 space-x-2">
        <h3 class="text-sm mr-3">Sent from:{{$user->name}}</h3>
        <livewire:heartreact :note="$note" />
    </div>
</x-guest-layout>