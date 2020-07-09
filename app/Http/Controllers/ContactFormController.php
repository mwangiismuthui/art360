<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messagesDetails = ContactForm::orderBy('id', 'DESC')->get();
        $data = [
            'messagesDetails' => $messagesDetails,
        ];
        return view('backend.contactMessos.index', $data);
    }



}
