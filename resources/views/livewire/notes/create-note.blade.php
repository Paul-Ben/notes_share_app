<?php

use Livewire\Volt\Component;
use App\Models\Note;

new class extends Component {
    public $noteTitle ;
    public $noteBody ;
    public $noteRecipient;
    public $noteSendDate;
   


    public function submit()
    {
        $validated = $this->validate([
        'noteTitle' => 'required|min:3',
        'noteBody' => 'required|max:140',
        'noteRecipient' => 'required|email',
        'noteSendDate' => 'required|date',
        
    ]);

    // Auth::user()->notes()->create([
    //     'title' => $this->noteTitle,
    //     'body' => $this->noteBody,
    //     'recipient' => $this->noteRecipient,
    //     'send_date' => $this->noteSendDate
    // ]);

    Note::create([
        'user_id' => Auth::user()->id,
        'title' => $this->noteTitle,
        'body' => $this->noteBody,
        'recipient' => $this->noteRecipient,
        'send_date' => $this->noteSendDate
    ]);

    redirect(route('notes.index'));
    }

}; ?>

<div>
    <form wire:submit="submit">
        <x-input wire:model="noteTitle" label="Title" placeholder="Title"/>
        <x-textarea wire:model="noteBody" label="Body" placeholder="Type your note to send"/>
        <x-input wire:model="noteRecipient" label="Recipient" icon="user" placeholder="Eg: example@gmail.com"/>
        <x-input wire:model="noteSendDate" type="date" label="Date" />
        <x-button primary class="py-2 mt-3" right-icon="calendar" wire:click="submit">Submit</x-button>
        <x-errors />

    </form>
</div>
