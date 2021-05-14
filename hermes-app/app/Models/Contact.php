<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function address(){
      return $this->hasOne(Address::class); 
    }

    //Uno a muchos
    public function budgets(){
      return $this->hasMany(Budget::class);
    }
  
}
