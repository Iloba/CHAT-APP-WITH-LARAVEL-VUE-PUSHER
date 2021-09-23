<?php

namespace App\Models;

use App\Models\User;
use App\Models\ChatRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatMessage extends Model
{
    use HasFactory;

    public function room(){
        return $this->hasOne(ChatRoom::class, 'id', 'chat_room_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
