<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $table = 'cars_model';
    protected $primarykey = 'id';
    public function car(){
    return $this->belongsTo(Car::class);
    }
}
