<?php

namespace App\Services;

use App\Repositories\CarRepository;

class Car
{
    /**
     * @var CarRepository
     */
    private $carRepository;

    /**
     * Car constructor.
     */
    public function __construct()
    {
        $this->carRepository = new CarRepository();
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->carRepository->allNoTrashed([
            'id',
            'model',
            'brand',
            'color',
            'price',
            'year'
        ]);
    }
}
