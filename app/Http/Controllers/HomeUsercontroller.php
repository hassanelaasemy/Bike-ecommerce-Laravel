<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeUsercontroller extends Controller

{

  public function indexHopme(){
    $products =Product::all();
    return view('pages.Home',['products' => $products]);
  }

    public function indexMountain(){
      $Mountain = Product::where('Category_Name','Mountain')->get();
      return view('pages.Mountain',['mountain' => $Mountain]);
    }
   
    public function indexElectric(){
      $Electric = Product::where('Category_Name','Electric')->get();
      return view('pages.Electric',['Electric'=>$Electric]);
    }

    public function indexRoad(){
      $roadpro =  Product::where('Category_Name','Road')->get();
      return view('pages.Road', ['productsRoad' => $roadpro]);
    } 

    public function indexHybrid(){
      $Hybrid = Product::where('Category_Name','Hybrid')->get();
      return view('pages.Hybrid',['Hybrid'=>$Hybrid]);
    }

    public function indexCity()
    {
        $cityProducts = Product::where('Category_Name','City')->get();
        return view('pages.City', ['cityProducts' => $cityProducts]);
    }
    
    










    public function indexContact(){
      return view('pages.Contact');
    }

    public function show(){
      return view('pages.Show');
    }



    // -----------------------------------------------
// etap1:
    public function showpanier()
    {
        // Retrieve all stored data from the session
        $storedData = session()->all();
        // Filter the session data to get only the data with keys starting with 'formdata'
        $sessionData = array_filter($storedData, function ($key) {
            return preg_match('/^formdata/', $key);
        }, ARRAY_FILTER_USE_KEY);
        // Calculate the total price of items in the cart
        $total = 10; // Initial total price value
        foreach ($sessionData as $val) {
            $total += $val['price'] * $val['stock_quantity'];
        }
        // Pass the session data and total price to the 'pages.Panier' view
        return view('pages.Panier')
            ->with('data', $sessionData)
            ->with('total', $total);
    }
}
