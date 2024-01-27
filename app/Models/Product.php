<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\Orderitem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;



    public function categorie(){
      return $this->belongsTo(Categorie::class);
    }

    protected $fillable = [
      'name',
      'description',
      'Category_Name',
      'Brand',
      'image',
      'price',
      'oldprice',
      'stock_quantity'
    ];


}
