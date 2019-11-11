<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $products = New Product;
        $attr = [
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'is_highlight' => $request->get('is_highlight'),
            'quantity' => $request->get('quantity'),
            'description' => $request->get('description'),
        ];
        if ($request->hasFile('images')) {  
            $destinationDir = public_path('images/product');
            $fileName = uniqid('imageproduct').'.'.$request->images->extension();
            $request->images->move($destinationDir, $fileName);
            $attr['images'] = '/images/product/'.$fileName;
        }
        
        $products->create($attr);
        return redirect()->route('admin.products.index')->with('alert', trans('setting.add_product_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $products = Product::findOrFail($id);
        return view('admin.products.edit',compact('categories','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
       $products = Product::findOrFail($id);
       $arrt = [
        'category_id' => $request->get('category_id'),
        'name' => $request->get('name'),
        'price' => $request->get('price'),
        'is_highlight' => $request->get('is_highlight'),
        'quantity' => $request->get('quantity'),
        'description' => $request->get('description'),
       ];
    //    if ($request->hasFile('images')) {  
        // $destinationDir = public_path('images/product');
        // $fileName = uniqid('imageproduct').'.'.$request->images->extension();
        // $request->images->move($destinationDir, $fileName);
        // $attr['images'] = '/images/product/'.$fileName;
        
        // }
        dd($attr);
        dd('oke');
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
    }
}
