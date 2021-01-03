<?php

namespace App\Models;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    protected $fillable = [
        'room_id',
        'waterbill',
        'consumption',
        'public_e',
        'rent',
        'w_status',
        'e_status',
        'r_status',
        'cost_month',
    ];
}
