<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Car;

class CarRepository extends AbstractRepository
{
    /**
     * CarRepository constructor.
     */
    public function __construct()
    {
        $this->model = new Car();
    }
}
