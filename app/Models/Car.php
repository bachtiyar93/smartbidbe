<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'car_id';
    public function Image()
    {
        return $this->hasMany(Image::class, 'owner');
    }

    protected $fillable = [
        'car_id',
        'car_model',
        'brand_id',
        'car_production',
        'car_type',
        'car_engine_type',
        'car_engine_capacity',
        'car_power',
        'car_fuel',
        'car_transmission',
        'car_condition',
        'car_price',
        'car_selling_time',
        'car_discount',
        'car_id_owner',
        'car_last_service',
        'car_type_service',
        'car_fitur',
        'car_color',
        'car_stock',
    ];
    public function images()
    {
        return $this->hasMany(Image::class, 'owner')->withDefault();
    }

    protected static function booted()
        {
            static::created(function ($car) {
                $image = new Image;
                $image->owner = $car->id;
                $image->save();
            });
        }
}

