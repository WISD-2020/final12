<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactperson extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
