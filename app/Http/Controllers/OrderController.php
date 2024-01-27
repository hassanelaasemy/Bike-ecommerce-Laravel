<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

  public function getallorder()
  {
      $orders = Order::all();
      return view('admin.orders')->with('orders',$orders);
  }
   


public function commandshow(){
    $storedData = session()->all();
    $sessionData = array_filter($storedData, function ($key) {
        return preg_match('/^formdata/', $key);
    }, ARRAY_FILTER_USE_KEY); 
    $total = 10 ;
    foreach($sessionData as $val){
        $total += $val['price'] * $val['stock_quantity'];
    }
  return view('pages.command')
  ->with('command',$sessionData)
  ->with('total',$total);
  }


   
  public function sendcommand(Request $request)
{
    // Retrieve all stored data from the session
    $storedData = session()->all();
    
    // Filter the session data to get only the data with keys starting with 'formdata'
    $sessionData = array_filter($storedData, function ($key) {
        return preg_match('/^formdata/', $key);
    }, ARRAY_FILTER_USE_KEY);
    
    // Generate a random number for the command
    $randomNumber = Str::random(9);
    
    // Loop through the session data and save the command details to the database
    foreach ($sessionData as $data) {
        if (is_array($data)) {
            $model = new Order();
            $model->name = $request->name;
            $model->name_commandes = $randomNumber;
            $model->lastname = $request->lastname;
            $model->adresse = $request->adresse;
            $model->ville = $request->ville;
            $model->num1 = $request->num1;
            $model->product_name = $data['name'];
            $model->product_price = $data['price'];
            $model->product_qte = $data['stock_quantity'];
            $model->Product_image = $data['image'];
            $model->save();
        }
    }
    
    // Clear the session data
    session()->flush();
    $data['data']=$sessionData;
    $data['user_name']=$request->name;
    $data['user_phone']=$request->num1;
    $data['user_ville']=$request->ville;
    $data['user_email_adresse']=$request->adresse;
    $data['CommandeName']=$randomNumber;

     Mail::send('emails.testemail', ['data' => $data], function ($message) use ($data) {
      $message->to('elaasemyhassan01@gmail.com')->subject("Nouvelle commande");

  });
    // Set a success message
    $message = 'La commande a été envoyée';
    
    // Redirect the user to the 'showpanier' route with the success message
    return redirect()->route('showpanier')->with('message', $message);
}

}
