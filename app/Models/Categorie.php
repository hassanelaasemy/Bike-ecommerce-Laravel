<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    public function produits(){
      return $this->hasMany(Product::class );
    }
   
    protected $fillable = [
    'Category_Name',
    'description'
    ];

}
