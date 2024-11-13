<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'address',
        'password'
    ];

    public function works()
    {
        return $this->hasMany(Work::class, 'user_id', 'user_id');
    }

    public function breaks()
    {
        return $this->hasMany(BreakTime::class, 'user_id', 'user_id');
    }
}
