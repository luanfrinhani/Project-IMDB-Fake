<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\System\Movie;

class MovieDataManager extends DataManager
{
    public function __construct(Movie $movie)
    {
        parent::__construct($movie);
    }
}
