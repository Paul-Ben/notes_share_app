<?php

use Livewire\Volt\Component;
use App\Models\Note;

new class extends Component {
    public function with(): array 
    {
        $user = Auth::user();
        $notes = $user->notes;
        return [
            'notes' => $user->notes()->latest()->paginate(10),
    ]; 
    }

    public function delete($noteId)
    {
        $note = Note::where('id', $noteId)->first();
        $this->authorize('delete', $note);
        $note->delete();
        redirect(route('notes.index'));
    }
}; ?>

<div>
    <div class="space-y-2">
        <x-button icon="plus" class="m-2 bg-primary-400 text-slate-950 hover:bg-primary-200" href="{{route('notes.create')}}" wire:navigate>Create Note</x-button>
        <div class="grid sm:grid-cols-3 gap-4 mt-12">
            @forelse ($notes as $note)
            <x-card wire:key='{{$note->id}}' class="bg-orange-200">
                <div class="flex justify-between">
                    <div>
                        <a href="{{route('notes.edit', $note)}}" wire:navigate class="text-x1 font-bold hover:underline hover:text-blue-500">{{$note->title}}</a>
                    <p class="text-sm">{{Str::limit($note->body, 30)}}</p>
                    </div>
                    
                    <div class="text-xs text-gray-500">
                        {{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }}
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 space-x-1">
                    <p class="text-xs">Recipient: <span class="font-semibold">{{ $note->recipient}}</span> </p>
                    <div>
                        <x-button.circle icon='eye' wire:navigate href="{{route('notes.view', $note)}}"/>
                        <x-button.circle icon='trash' wire:click="delete('{{$note->id}}')" />
                    </div>
                </div>
                
                 
            </x-card>
            @empty
                <div class="space-y-2">
                    {{-- <div class="grid-cols-12 mt-12"> --}}
                        <x-card>
                        <div class="text-center">
                            <p class="text-x1 font-bold my-2">
                                {{"No notes yet."}}
                            </p>
                            <p class="text-md">{{"Let's Create your first note to send."}}</p>
                            <x-button primary icon-right="plus" class="m-2" href="{{route('notes.create')}}" wire:navigate>Create Note</x-button>
                        </div>
                        </x-card>
                    {{-- </div>     --}}
                </div>

            @endforelse
        </div>
    </div>  
</div> 
