<?php

namespace App\Http\Controllers;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function storeSubscriber(Request $request)
    {
        $subscriber = new Subscriber;
       
        $subscriber->email = $request['email'];
     
        $subscriber->save();
    
        // Additional logic or redirect here
    
        return redirect()->back()->with('success', 'You are successfully Subscribe.');
    }

    // public function viewSubscriber(){

    //     $subscriber = Subscriber::all();
    //     return view('subscriber',compact('subscriber'));
    // }
}
