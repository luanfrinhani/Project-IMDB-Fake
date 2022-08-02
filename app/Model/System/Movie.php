<?php

namespace App\Model\System;

use App\Model\Core\File;
use App\Traits\Core\Uuid;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use Uuid;

    protected $fillable = [
        'name', 'description', 'release_date', 'poster_id', 'review', 'rate', 'status_movie'
    ];

    public function posterFile()
    {
        $this->belongsTo(File::class, 'poster_id');
    }
}
