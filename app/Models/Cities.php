<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
    public function state()
    {
        return $this->belongsTo(States::class);
    }
}
