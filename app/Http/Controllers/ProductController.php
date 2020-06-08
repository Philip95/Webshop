<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products, but not more than 15 per page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home() {
        $products = Product::paginate(15);

        return view('produktuebersicht', ['products' => $products]);
    }

    /**
     * Returning all products for the product overview
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function overview() {
        $products = Product::all();

        return view('verwaltung.uebersicht', ['products' => $products]);
    }

    /**
     * Delete a specific product
     * After deleting the user will be redirected to the overview
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request) {
        $product = Product::find($request->p_id);
        $product->delete();

        return redirect(route('verwalten'));
    }

    /**
     * Returning view for inserting a product
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showInsertForm() {
        return view('verwaltung.newProduct');
    }

}
