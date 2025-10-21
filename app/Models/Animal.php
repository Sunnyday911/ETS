<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name', 'age', 'type', 'customer_id'];
    /** @use HasFactory<\Database\Factories\AnimalFactory> */
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
