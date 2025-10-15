<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Comment extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    protected $fillable = ['user_id', 'advert_id','stars'];
    public $translatedAttributes = ['content'];
    public function advert()
    {
        return $this->belongsTo(Advert::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function hasTranslationForCurrentLocale()
    {
        $locale = session()->get('locale');
        return $this->translations()->where('locale', $locale)->exists();
    }

}
