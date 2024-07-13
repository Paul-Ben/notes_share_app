<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}
                <div class="p-6 text-gray-900">
                    <div class="space-y-2">
                        <div class="grid grid-cols-2 gap-4 mt-12">
                            @php
                                $user = Auth::user();
                                $notes = $user->notes->count();
                                $unsent = $user->notes->where("send_date", ">", now())->count()
                            @endphp
                            <x-card >
                                <div class="flex justify-between">
                                    <a href="#" class="text-x2 font-bold hover:underline hover:text-blue-500">{{ $notes }}</a>
                                    <div class="text-x1 text-gray-500">{{'Notes'}}</div>
                                </div>
                            </x-card>  
                            <x-card >
                                <div class="flex justify-between">
                                    <a href="#" class="text-x2 font-bold hover:underline hover:text-blue-500">{{ $unsent }}</a>
                                    <div class="text-x1 text-gray-500">{{'Unsent Notes'}}</div>
                                </div>
                            </x-card>    
                            
                        </div>
                    </div>  

                </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
