<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{





    //----------------------add category
    public function addCategory(Request $request)
    {
        $validatedData = $request->validate([
            'Category_Name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = Categorie::create($validatedData);
        $message = 'category added successfully';
        return redirect()->back()->with('message', $message);
    }



    //--------------------------Delete category
    public function deleteCategory($categoryId)
    {
        $category = Categorie::find($categoryId);
        $category->delete();
        $message = 'Category deleted successfully';
        return redirect()->back()->with('message1', $message);
    }
    

}
