<?php

namespace App\Models;
use App\Models\Room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    use HasFactory;
    protected $fillable = [
        'room_id',
        'raintenance_staff',
        'repair_content',
        'repair_fess',
        'repair_date',
        'return_date',
        'repairs_statu',
    ];
}
