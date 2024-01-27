<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

public function addProduct(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'Category_Name' => 'required',
        'description' => 'required|string',
        'Brand' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'price' => 'required|numeric',
        'oldprice' => 'required|numeric',
        'stock_quantity' => 'required|integer'
    ]);

    $photo = $request->image;
    $newphoto = time().$photo->getClientOriginalName();
    $photo->move('uploads/images', $newphoto);

    $product = Product::create([
        'name' => $request->name,
        'Category_Name' => $request->Category_Name,
        'description' => $request->description,
        'Brand' => $request->Brand,
        'image' => 'uploads/images/' . $newphoto,
        'price' => $request->price,
        'oldprice' => $request->oldprice,
        'stock_quantity' => $request->stock_quantity,
    ]);
    // return response()->json($product);
     $message = 'Product added successfully';
     return redirect()->back()->with('message', $message);
}

  



//--------------------------------------------get product by id:
    public function getproductbyid(Product $product)
    {
        $productone = Product::find($product);
        return view('pages.Show',['productone' => $product]);
    }




    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'Category_Name' => 'required',
            'description' => 'required|string',
            'Brand' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'price' => 'required|numeric',
            'oldprice' => 'required|numeric',
            'stock_quantity' => 'required|integer'
        ]);
    
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->Category_Name = $request->Category_Name;
        $product->description = $request->description;
        $product->Brand = $request->Brand;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->stock_quantity = $request->stock_quantity;
    
        if ($request->hasFile('image')) {
            $photo = $request->image;
            $newphoto = time() . $photo->getClientOriginalName();
            $photo->move('uploads/images', $newphoto);
            $product->image = 'uploads/images/' . $newphoto;
        }
    
        $product->save();
    
        $message = 'Product updated successfully';
        return redirect()->route('adminproduct')->with('message', $message);
    }
    

}