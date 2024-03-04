<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
//name
//email
//subject
//message
class MessagesShow extends Component
{
    protected $listeners = ['messageShow'];
    public $record,$name,$email,$subject ,$message;

    public function messageShow($id){
        $this->record = Message::find($id);
        $this->name = $this->record->name;
        $this->email = $this->record->email;
        $this->subject = $this->record->subject;
        $this->message = $this->record->message;
        $this->dispatch('skillShow');
        $this->record->update(['status'=>'1']);
        $this->dispatch('refreshData');


    }

    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
