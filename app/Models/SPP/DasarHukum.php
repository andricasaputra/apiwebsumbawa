<?php

namespace App\Models\SPP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\SPPModelContract;

class DasarHukum extends Model implements SPPModelContract
{
    use HasFactory;

    protected $table = 'spp';
    protected $guarded = ['id'];
}
