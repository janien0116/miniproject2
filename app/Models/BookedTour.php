<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BookedTour extends Model
{
    use HasFactory;
    protected $fillable = [
        'Destination',
        'FromDate',
        'ToDate',
        'BookedSeats',
        'PickupPoint',
        'PickupTime',
        'Inclusions',
        'Price',
        'BookedBy',
        'name'
    ];

    protected static function  boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->ReferenceNo = Str::random(10);
        });
    }
}
