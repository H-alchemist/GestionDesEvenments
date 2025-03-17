<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'evenment_id',
    ];

    public function participant()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function evenment()
    {
        return $this->belongsTo(Evenment::class);
    }
}
