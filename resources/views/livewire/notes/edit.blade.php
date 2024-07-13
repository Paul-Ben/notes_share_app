<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Note;

new #[Layout('layouts.app')] class extends Component {
    public Note $note;
    public $noteTitle ;
    public $noteBody ;
    public $noteRecipient;
    public $noteSendDate;
    public $noteIsPublished;

    public function mount(Note $note)
    {
        $this->authorize('update', $note);
        $this->fill($note);
        $this->noteTitle = $note->title;
        $this->noteBody = $note->body;
        $this->noteRecipient = $note->recipient;
        $this->noteSendDate = $note->send_date;
        $this->noteIsPublished = $note->is_published;
    }

    public function saveNote()
    {
      $validated = $this->validate([
        'noteTitle' => 'required|min:3',
        'noteBody' => 'required|max:140',
        'noteRecipient' => 'required|email',
        'noteSendDate' => 'required|date',
        
    ]);

    $this->note->update([
      'user_id' => Auth::user()->id,
        'title' => $this->noteTitle,
        'body' => $this->noteBody,
        'recipient' => $this->noteRecipient,
        'send_date' => $this->noteSendDate,
        'is_published' => $this->noteIsPublished,
    ]);

    $this->dispatch('note-saved');
    // redirect(route('notes.index'));
    }
}; ?>

<div>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit') }}
    </h2>
</x-slot>
  <div class="grid grid-cols-1 max-w-2xl mx-auto space-y-9 sm:px-6 lg:px-8">
    <div class="rounded bg-green-400 text-center max-h-10 mt-6">
      <x-action-message on="note-saved" />
    </div>
    <form wire:submit="saveNote" class="space-y-4">
        <x-input wire:model="noteTitle" label="Title" value="{{$note->title}}"></x-input>
        <x-textarea wire:model="noteBody" label="Body">{{$note->body}}</x-textarea>
        <x-input wire:model="noteRecipient" label="Recipient" value="{{$note->recipient}}"></x-input>
        <x-input wire:model="noteSendDate" type="date" label="Date" value="{{$note->send_date}}"></x-input>
        <x-checkbox wire:model="noteIsPublished" label="Published"></x-checkbox>
        <div class="flex justify-between ">
          <x-button rounded class="bg-green-400 hover:bg-green-300" type="submit" label="Update" spinner="saveNote"></x-button>
          <x-button rounded class="hover:bg-red-300" href="{{route('notes.index')}}" icon="arrow-left" spinner>Cancle</x-button>
        </div>       
    </form>
  </div>
  <div class="space-y-8"><br><br></div>
</div>
