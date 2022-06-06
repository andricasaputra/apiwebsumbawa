<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Headline extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $headlineImagePath = 'images/headlines';

    protected function image(): Attribute
    {
        $url = config('app.url');
        $port = env('SERVER_PORT') ? ':' . env('SERVER_PORT') : '';
        $full_path = $url . $port . '/' . $this->headlineImagePath;

        return Attribute::make(
            get: fn ($value) => $full_path .'/'. $value,
        );
    }
}
