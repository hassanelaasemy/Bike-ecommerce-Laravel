<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
  public function sendMessage(Request $request)
  {
      $data = $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email',
          'subject' => 'required|string',
          'phone' => 'required',
          'message' => 'required|string',
      ]);
      
      Contact::create($data);
  
      return redirect('/')->with('success', 'Your message has been sent successfully.');
  }
  
  
    


}
