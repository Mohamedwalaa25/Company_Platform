<?php

namespace App\Livewire\Admin\Messages;


use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    protected $listeners = ['messageDelete'];
    public $message;

    public function messageDelete($id){

        $this->message = Message::find($id);
        $this->dispatch('deleteData');

    }

    public function submit(){
        $this->message->delete();
        $this->reset('message');
        $this->dispatch('deleteData');
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
