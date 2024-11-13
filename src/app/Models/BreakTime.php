<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakTime extends Model
{
    use HasFactory;

    protected $primaryKey = 'break_id';

    protected $fillable = [
        'user_id',
        'break_start',
        'break_end'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}