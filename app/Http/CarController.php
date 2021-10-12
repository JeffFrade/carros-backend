<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Services\Car;
use Illuminate\Http\JsonResponse;

class CarController extends Controller
{
    /**
     * @var Car
     */
    private $car;

    /**
     * CarController constructor.
     * @param Car $car
     */
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    /**
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json($this->car->index());
    }
}
