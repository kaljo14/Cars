<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table ='cars';
    protected $primaryKay = 'id';
    
   protected $fillable =['name','founded','description','image_path'];
    
   public function carModels(){
        return $this->hasMany(CarModel::class );
    }
    //difine a has many through relashionship
    public function engines(){

        return $this->hasManyThrough(Engine::class,CarModel::class,'car_id','model_id');
    }
    //Difine a has one relashionship
    public function productionDate(){
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }
    // define many to many relashionship 
    public function products(){
        return $this->belongsToMany(Product::class);
    }

}
