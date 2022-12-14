<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_no',
        'type',
        'description',
        'price'
    ];

    public function facilities(){
        return $this->belongsToMany(Facility::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class);
    }

}
