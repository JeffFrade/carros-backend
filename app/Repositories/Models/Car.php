<?php

namespace App\Repositories\Models;

use Database\Factories\CarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'model',
        'brand',
        'color',
        'price',
        'year'
    ];

    /**
     * @return CarFactory
     */
    protected static function newFactory()
    {
        return CarFactory::new();
    }
}
