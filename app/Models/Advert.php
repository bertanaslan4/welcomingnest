<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Advert extends Model  implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'description'];
    protected $fillable = ['city_id', 'user_id', 'price', 'address', 'status', 'properties', 'thumbnail'];

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(AdvertImage::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function hasTranslationForCurrentLocale()
    {
        $locale = session()->get('locale');
        return $this->translations()->where('locale', $locale)->exists();
    }
}
