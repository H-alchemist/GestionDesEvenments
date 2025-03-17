<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'date',
        'location',
        'image',
        'capacity',
        'state'
    ];

    public function organiser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'reservations', 'evenment_id', 'user_id');
    }

    public function capacityAvailabe()
    {
        return $this->capacity - $this->participants()->count();
    }
}
