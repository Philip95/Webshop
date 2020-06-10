<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BezahlungController extends Controller
{
    /**
     * Return the blade for the invoice
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function checkout() {
        return view('checkout.invoice');
    }

    /**
     * Store the data from the invoice in an array and put it in the Session.
     * Also returning the shipping blade.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * Put the chosen shipping option to the array and returning the blade for the payment
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function choosePayment(Request $request) {
        $gast = Session::get("Gast");

        $gast += ['versand' => $request->versand];

        Session::put("Gast", $gast);

        return view("checkout.paymentOptions");
    }

    /**
     * Add the chosen payment method to the array and returning the blade for the overview of the order
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function overview(Request $request) {
        $gast = Session::get("Gast");
        $gast += ['payment' => $request->payment];


        return view('checkout.overview', ["user" => $gast]);
    }

    /**
     * Redirect after a fake purchase to the success route.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function purchase() {
        return redirect()->route('success');
    }

    /**
     * Returning the success blade.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function success() {
        return view('checkout.success');
    }

}
