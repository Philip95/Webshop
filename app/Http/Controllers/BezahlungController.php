<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BezahlungController extends Controller
{
    public function checkout() {
        return view('checkout.invoice');
    }

    public function rechnungsadresse(Request $request) {
        $zusatz = "";

        if(($request->adresszusatz == null)) {
            $zusatz = $request->adresszusatz;
        }

        $gast = array(
            "geschlecht" => $request->geschlecht,
            "vorname" => $request->name,
            "nachname" => $request->nachname,
            "adresse" => $request->adresse,
            "hausnummer" => $request->hausnummer,
            "adresszusatz"=> $zusatz,
            "plz"=> $request->plz,
            "stadt"=> $request->stadt,
            "email"=>$request->email
        );

        Session::put("Gast", $gast);

        return view('checkout.shipping');
    }

    public function choosePayment(Request $request) {
        $gast = Session::get("Gast");

        $gast += ['versand' => $request->versand];

        Session::put("Gast", $gast);

        return view("checkout.paymentOptions");
    }

    public function overview(Request $request) {
        $gast = Session::get("Gast");
        $gast += ['payment' => $request->payment];


        return view('checkout.overview', ["user" => $gast]);
    }

    public function purchase() {

    }

}
