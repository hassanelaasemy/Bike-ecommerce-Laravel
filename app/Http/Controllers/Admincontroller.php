<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function dashboardAdmin(){
      return view('admin.dashboard');
    }
    
    public function adminproduct(){
      $allproducts= Product::all();
      return view('admin.products' ,['products'=>$allproducts]);
    }


    public function deleteproduct($id){
      Product::destroy($id);
      $message = 'Product deleted successfully';
      return redirect()->route('adminproduct')->with('message', $message);
    }

    public function Admincategory(){
      $categories = Categorie::all();
      return view('admin.category')->with('categories',$categories);
    }
      

    public function UpdatePro($id){
      $product =Product::find($id);
      return view('admin.updatePro',['product'=>$product]);
    }
    
}
