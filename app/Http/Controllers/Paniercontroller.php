<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Paniercontroller extends Controller
{
// etap3
  
  public function create($id)
  {
      // Find the product with the given ID
      $Prod = Product::find($id);
      
      // Retrieve all data stored in the session
      $sessionData = session()->all();
      
      // Define the value to search for in the session data
      $searchValue = $id;
      
      // Search for the value in the session data using the searchValueInArray method
      $found = $this->searchValueInArray($sessionData, $searchValue);
      
      // If the value is not found in the session data, add the product to the session
      if (!$found) {
          // Generate a unique session key using the current timestamp
          $sessionKey = 'formdata' . time();
          
          // Create an array with the product data and the session key
          $data = [
              'id' => $id,
              'name' => $Prod->name,
              'Category_Name' => $Prod->Category_Name,
              'Brand' => $Prod->Brand,
              'image' => $Prod->image,
              'price' => $Prod->price,
              'stock_quantity' => 1,
              'arrayname' => $sessionKey,
          ];
          
          // Store the data in the session using the session key
          Session::put($sessionKey, $data);
      }
      
      // Redirect the user to the 'showpanier' route
      return redirect()->route('showpanier');
  }
  
// etap2
// ------------------------------------------------------------------
  private function searchValueInArray($array, $searchValue)
  {
      // Iterate over each element in the array
      foreach ($array as $value) {
          // If the element is an array, recursively call the function to search within it
          if (is_array($value)) {
              $found = $this->searchValueInArray($value, $searchValue);
              
              // If the value is found in the nested array, return true
              if ($found) {
                  return true;
              }
          }
          // If the element is not an array, check if it matches the search value
          elseif ($value === $searchValue) {
              return true;
          }
      }
      
      // If the search value is not found in the array, return false
      return false;
  }
  


// ----------------------------------------------------------------

public function editmoins($name)
{
    // Retrieve the array stored in the session with the given name
    $myArray = session($name, []);

    // Check if the stock quantity in the array is greater than 1
    if ($myArray['stock_quantity'] > 1) {
        // Decrease the stock quantity by 1
        $myArray['stock_quantity'] -= 1;
    } else {
        // If the stock quantity is 1 or less, set it to 1 (minimum allowed value)
        $myArray['stock_quantity'] = 1;
    }

    // Update the session data with the modified array using the given name
    session([$name => $myArray]);

    // Redirect the user back to the previous page
    return redirect()->back();
}


// ------------------------------------------------------

public function editplus($name)
{
    // Retrieve the array stored in the session with the given name
    $myArray = session($name, []);

    // Increase the stock quantity by 1
    $myArray['stock_quantity'] += 1;

    // Update the session data with the modified array using the given name
    session([$name => $myArray]);

    // Redirect the user back to the previous page
    return redirect()->back();
}


// ----------------------------------------------------

public function destroy(Request $request)
{
    // Retrieve the session key from the request input
    $sessionKey = $request->input('session_key');
    
    // Remove the session data with the given session key
    Session::forget($sessionKey);
    
    // Redirect the user back to the previous page
    return redirect()->back();
}

}
