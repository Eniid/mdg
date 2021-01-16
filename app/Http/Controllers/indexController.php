<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Contact;
use App\Models\Edition;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Stripe\Stripe;

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



    public function last(){
        $editions = Edition::all();
        $lastEdition = $editions->sortByDesc('edition_date')->first();
        $larchives = Archive::with('archivepic')->orderBy('edition_id', 'desc')->paginate(10);



        $contact = Contact::all()->first(); 

        return view('last', compact('lastEdition', 'contact', 'larchives'));
    }


    public function buy(){
        Stripe::setApiKey('sk_test_51I4y7oES2VuO6fZpy9wJc0Y2xtK517dgMukrzRWuMOf98eAZbCmmc5VQzdk0tq40ViZh2w4u8y2rCTnITydUYcHs00nVzKUyeg');
        

        $editions = Edition::all();
        $lastEdition = $editions->sortByDesc('edition_date')->first();

        $contact = Contact::all()->first(); 




        $price = $lastEdition ->price *100; 




        $intent = \Stripe\PaymentIntent::create([
            'amount' => $price,
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');
            //echo json_encode(['id' => $checkout_session->id]);

        //FIN 

        //var_dump($lastEdition);

        return view('buy', compact('lastEdition', 'contact', 'clientSecret'));
    }







    public function pay(){
        Stripe::setApiKey('sk_test_51I4y7oES2VuO6fZpy9wJc0Y2xtK517dgMukrzRWuMOf98eAZbCmmc5VQzdk0tq40ViZh2w4u8y2rCTnITydUYcHs00nVzKUyeg');
        

        
        $editions = Edition::all();
        $lastEdition = $editions->sortByDesc('edition_date')->first();

        $contact = Contact::all()->first(); 

        $price = $editions->price ; 
        dd($price);


        $intent = \Stripe\PaymentIntent::create([
            'amount' => 1099,
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');
            //echo json_encode(['id' => $checkout_session->id]);

        //FIN 





        //var_dump($lastEdition);

        return view('buy', compact('lastEdition', 'contact', 'clientSecret'));
    }
}
