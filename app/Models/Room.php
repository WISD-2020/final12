<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Repair;
use App\Models\Mail;
use App\Models\Cost;

class Room extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    public function costs()
    {
        return $this->hasMany(Cost::class);
    }
    public function mails()
    {
        return $this->hasMany(Mail::class);
    }
    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
