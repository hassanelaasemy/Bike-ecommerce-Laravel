<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'name_commandes',
      'name',
      'lastname',
      'adresse',
      'ville',
      'num1',
      'product_name',
      'product_price',
      'product_qte',
      'Product_image',

      ];
}
