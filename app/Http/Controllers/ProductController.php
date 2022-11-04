<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data  = Product::paginate(2);
        $data1  = Product::where('stock', '=', 0)->count();
        $data2  = Product::where('stock', '!=', 0)->count();
        $nall   = Product::get()->count();
        return view('products', compact(['data', 'nall', 'data1','data2']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/addProduct');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function indexFilter(Request $request)
    // {
    //     $data1  = Product::where('stock', '=', 0)->count();
    //     $data2  = Product::where('stock', '!=', 0)->count();
    //     $nall   = Product::get()->count();
    //     $data  = Product::where ( 'name', 'LIKE', '%' . $request->search . '%' )
    //         ->orWhere ( 'description', 'LIKE', '%' . $request->search . '%' )
    //         ->orWhere ( 'stock', 'LIKE', '%' . $request->search . '%' )
    //         ->orWhere ( 'price', 'LIKE', '%' . $request->search . '%' )
    //         ->orWhere ( 'published', 'LIKE', '%' . $request->search . '%' )
    //         ->paginate(1);

    //     if (count ( $data ) > 0)
    //         return view ( 'products', compact(['data', 'nall', 'data1','data2']))->withDetails( $data )->withQuery ( $request->search );
    //     else
    //         return view ( 'products',compact(['data', 'nall', 'data1','data2']) )->withMessage( 'No bikes Details found. Try to search again !' );
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'stock'         =>  'required',
            //'orders' =>  'required',
            'price'         =>  'required',
            //'published'         =>  'required',
            'category'         =>  'required',
            'description'         =>  'required',
            'picture'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'

        ]);
        $picture = base64_encode(file_get_contents($request->file('picture')));
//        $file_name = time() . '.' . request()->picture->getClientOriginalExtension();
//        request()->picture->move(public_path('images'), $file_name);
        $product = new Product();
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->orders = 0;
        $product->published =  date('Y-m-d H:i:s');
        $product->category = $request->category;
        $product->description = $request->description;
        $product->picture = $picture;
        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $request->validate([
            'name'          =>  'required',
            'stock'         =>  'required',
            //'orders' =>  'required',
            'price'         =>  'required',
            //'published'         =>  'required',
            'category'         =>  'required',
            'description'         =>  'required',
            'picture'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'

        ]);
        $picture = base64_encode(file_get_contents($request->file('picture')));
//        $file_name = time() . '.' . request()->picture->getClientOriginalExtension();
//        request()->picture->move(public_path('images'), $file_name);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->orders = 0;
        $product->published =  date('Y-m-d H:i:s');
        $product->category = $request->category;
        $product->description = $request->description;
        $product->picture = $picture;
        $product->save();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
