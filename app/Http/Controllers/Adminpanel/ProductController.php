<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('industry', 'creator')->orderby('id', 'desc')->get();
        return view('adminpanel.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industries = Industry::all();
        return view('adminpanel.pages.product.create', compact('industries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'name' => 'string|required',
            'style' => 'string',
            'description' => 'string',
            'image1' => 'file|required',
            'image2' => 'file|required',
            'image3' => 'file|required',
            'image4' => 'file',
            'image5' => 'file',
            'industry_id' => 'exists:industries,id',

        ]);

        $input = $request->input();

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image1'] = $name;
        }

        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image2'] = $name;
        }

        if ($request->hasFile('image3')) {
            $image = $request->file('image3');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image3'] = $name;
        }

        if ($request->hasFile('image4')) {
            $image = $request->file('image4');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image4'] = $name;
        }

        if ($request->hasFile('image5')) {
            $image = $request->file('image5');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image5'] = $name;
        }

        $input['admin_id'] = 1;
        $input['slug'] = Str::slug($request->name);

        Product::create($input);

        return redirect()->route('admin.product.index')->with('success', 'Created Successfuly !');
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
        $industries = Industry::all();
        $product = Product::findOrFail($product->id);
        return view('adminpanel.pages.product.edit', compact('industries', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //return $request->all();
        $this->validate($request, [
            'name' => 'string|required',
            'style' => 'string',
            'description' => 'string',
            'image1' => 'file',
            'image2' => 'file',
            'image3' => 'file',
            'image4' => 'file',
            'image5' => 'file',
            'industry_id' => 'exists:industries,id',

        ]);

        $input = $request->except(['_token', '_method']);

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image1'] = $name;
        }
        else{
            unset($input['image1']);
        }

        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image2'] = $name;
        }
        else{
            unset($input['image2']);
        }

        if ($request->hasFile('image3')) {
            $image = $request->file('image3');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image3'] = $name;
        }
        else{
            unset($input['image3']);
        }

        if ($request->hasFile('image4')) {
            $image = $request->file('image4');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image4'] = $name;
        }
        else{
            unset($input['image4']);
        }

        if ($request->hasFile('image5')) {
            $image = $request->file('image5');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/products', $name);
            $input['image5'] = $name;
        }
        else{
            unset($input['image5']);
        }

        $input['slug'] = Str::slug($request->name);

        Product::where('id', $product->id)->update($input);
        // $product = Product::findOrFail($product->id);
        // $product->save($input);

        return redirect()->route('admin.product.index')->with('success', 'Created Successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Deleted Successfully !']);
        }

        return response()->json(['error' => 'Error while deleting !']);
    }
}
