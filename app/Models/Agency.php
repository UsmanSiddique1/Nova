<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
  
        'name',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->morphMany(Location::class, 'locatable');
    }

    public function car()
    {
        return $this->hasMany(Car::class);
    }

    public function driver(){
        return $this->hasMany(User::class);
    }

}
