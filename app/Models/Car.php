<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company','model','color','number_plate'];

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function locations()
    {
        return $this->morphMany(Location::class, 'locatable');
    }
}
