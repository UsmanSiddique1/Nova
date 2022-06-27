<?php

namespace App\Models;
use App\Models\Car;
use App\Models\Agency;



class Driver extends User
{
    public static function boot(){
        parent::boot();

        static::creating(function($doctor){
            $doctor->forceFill(['type' => self::class]);
        });

    }

    public static function booting(){

        static::addGlobalScope('driver' , function($builder){
            $builder->where('type', self::class);
        });
    }


    public function agency(){
        return $this->belongsTo(Agency::class);
    }

    public function car(){
        return $this->hasOne(Car::class);
    }
    
    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }




}
