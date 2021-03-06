<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Contact;
use App\Models\Edition;
use Illuminate\Http\Request;

class EditionController extends Controller
{
    //

    public function index(){
        $editions = Edition::all();
        $lastEdition = $editions->sortByDesc('edition_date')->first();

        $contact = Contact::all()->first(); 


        return view('last', compact('lastEdition', 'contact'));
    }




    public function last(){
        $editions = Edition::all();
        $lastEdition = $editions->sortByDesc('edition_date')->first();
        $archives = Archive::paginate(5);
        $larchives = $archives->sortByDesc('edition_id')->with('archivepic');


        $contact = Contact::all()->first(); 

        


        return view('last', compact('lastEdition', 'contact', 'archives', 'larchives'));
    }

}
