<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $articleImagePath = '/images/articles';

    protected function image(): Attribute
    {
        $url = config('app.url');
        $port = env('SERVER_PORT') ? ':' . env('SERVER_PORT') : '';
        $full_path = $url . $port . $this->articleImagePath;

        return Attribute::make(
            get: fn ($value) => $full_path .'/'. $value,
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
