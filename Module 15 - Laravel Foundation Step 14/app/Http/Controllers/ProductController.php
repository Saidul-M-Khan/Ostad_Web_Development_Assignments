<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index() {
        $products = Product::all();
        return view( 'product.index' )->with( 'products', $products );
    }

    public function create() {
        return view( 'product.create' );
    }

    public function store( Request $request ) {
        $product        = new Product();
        $product->name  = $request->input( 'name' );
        $product->price = $request->input( 'price' );
        $product->save();
        return redirect( 'product' )->with( 'status', 'create success' );
    }

    public function show( $id ) {

        $product = Product::find( $id );

        return view( 'product.show' )->with( 'product', $product );
    }

    public function edit( $id ) {
        $product = Product::find( $id );
        return view( 'product.edit' )->with( 'product', $product );
    }

    public function update( Request $request, $id ) {
        $product        = Product::find( $id );
        $product->name  = $request->input( 'name' );
        $product->price = $request->input( 'price' );
        $product->update();
        return redirect( 'product' )->with( 'status', 'update success' );
    }

    public function destroy( $id ) {
        $product = Product::find( $id );
        $product->delete();
        return redirect( 'product' )->with( 'status', 'delete success' );
    }
}
