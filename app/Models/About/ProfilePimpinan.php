<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePimpinan extends Model
{
    use HasFactory;

    public function image()
    {
        $this->morphOne(Image::class, 'imageable');
    }
}
