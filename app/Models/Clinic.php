<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = ['service_type', 'animal_id', 'price', 'diagnosis', 'treatment', 'date']; 
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    public function animal(){
        return $this->belongsTo(Animal::class);
    }

    public function customer(){
        return $this->animal->customer();
    }
}
