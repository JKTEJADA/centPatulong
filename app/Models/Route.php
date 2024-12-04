<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Route extends Model
{
    use HasFactory;

    protected $primaryKey = 'route_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'route_name',
        'departure_location',
        'destination',
        'distance',
        'duration',
        'image_path',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->route_id)) {
                $model->route_id = (string) Str::uuid();
            }
        });
    }
}