<?php
namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class ChatRoom extends Component
{
    public $username;
    public $message;

    public $messages;

    public function render()
    {
        $this->loadMessages();
        return view('livewire.chat-room');
    }

    public function sendMessage()
    {
        Message::create([
            'name'    => $this->username,
            'message' => $this->message,
        ]);
    }

    public function loadMessages()
    {
        $this->messages = Message::latest()->get();
    }

}
