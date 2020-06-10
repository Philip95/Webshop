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
        $products = Product::paginate(14);

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
     * After deleting the user will be redirected to the overview blade
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

    /**
     * Insert a new Product, since the pictures are loading forever, the picture attribute will be empty
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function insert(Request $request) {
        $product = Product::create([
            'name' => $request->name,
            'item_number' => $request->item_number,
            'description' => $request->description,
            'price' => $request->price,
            'picture' => ""
        ]);

        $product->save();

        return redirect( route('verwalten') );
    }

    /**
     * Returning the product, which should be updated with the specific blade
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showeditForm(Request $request) {
        $product = Product::find($request->p_id);

        return view('verwaltung.showedit', ['product'=> $product]);
    }

    /**
     * Update a certain product and redirect to the overview blade
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request) {
        $product = Product::find($request->p_id);

        $product->name = $request->name;
        $product->item_number = $request->item_number;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->picture = "";

        $product->save();

        return redirect( route('verwalten') );
    }

    /**
     * Return blade for the shopping cart
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function warenkorb() {
        return view('shoppingCart');
    }

    /**
     * Return one product
     *
     * @param Request $request
     * @return mixed
     */
    public function product(Request $request) {
        return Product::find($_GET['id']);
    }


}
