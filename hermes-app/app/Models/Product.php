<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'code',
    'description',
    'stock',
    'image',
    'price',
    'category_id',
    'company_id'
  ];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function company()
  {
    return $this->belongsTo(Company::class);
  }

  //many to many
  public function budgets(){
    return $this->belongsToMany(Budget::class)->withPivot( 
			'total_price', 'quantity');
  }
}
