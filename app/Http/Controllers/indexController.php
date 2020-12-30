<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Edition;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //


    public function index(){
        $editions = Edition::all();
        $lastEdition = $editions->sortByDesc('edition_date')->first();

        $contact = Contact::all()->first(); 

        //var_dump($lastEdition);

        return view('welcome', compact('lastEdition', 'contact'));
    }
}
