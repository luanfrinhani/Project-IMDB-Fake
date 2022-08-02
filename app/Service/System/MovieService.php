<?php

namespace App\Service\System;

use App\DataManager\System\MovieDataManager;
use App\Model\System\Movie;
use App\Service\Base\Service;

class MovieService extends Service
{
    public function __construct(Movie $movie, MovieDataManager $movieDataManager)
    {
        parent::__construct($movie, $movieDataManager);
        $this->dataManager = $movieDataManager;
    }

    public function rules($id): array
    {
        return [
            // TODO: Implement rules() method.
        ];
    }

    public function messages(): array
    {
        return [
            // TODO: Implement messages() method.
        ];
    }
}
