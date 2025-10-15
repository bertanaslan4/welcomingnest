<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function states()
    {
        return $this->hasMany(States::class);
    }
    public function cities()
    {
        return $this->hasManyThrough(Cities::class, States::class);
    }

}
