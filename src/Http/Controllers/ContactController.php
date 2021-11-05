<?php

namespace Kodestudio\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kodestudio\Contact\Models\Contact;

class ContactController extends Controller
{
    /**
     * Contact Page View
     *
     */
    public function index()
    {
        return view('contact::contact');
    }
    /**
     * Send Contact Message
     *
     */
    public function send(Request $request)
    {
        Contact::create($request->all());
        return redirect(route('contact'));
    }

}
