<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $articleImagePath = 'images/articles';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
