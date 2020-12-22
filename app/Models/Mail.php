<?php

namespace App\Models;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    use HasFactory;
}
