<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'contact_id'
    ];

    //many to many
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot( 
			'total_price', 'quantity');
    }

    //many to one
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function company(){
        return $this->hasOneThrough(Company::class, Contact::class);
    }
}
