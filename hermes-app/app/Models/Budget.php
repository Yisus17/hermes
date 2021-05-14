<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    //many to many
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    //many to one
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
