<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use App\Contact;
use Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(Request $request){
        
        $contact = Contact::create($request->all());
        
        $contact->notify(new NewContact());
        //ddd($request->all());
        //Notification::send('mail', 'avieiraottoni@gmail.com')->notify(new NewContact());
            
        ddd($contact);
    }
}
