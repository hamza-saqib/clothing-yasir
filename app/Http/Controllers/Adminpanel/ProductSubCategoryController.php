<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productSubCategories = ProductSubCategory::orderby('id', 'desc')->get();
        return view('adminpanel.pages.product.sub-category.index', compact('productSubCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategories = ProductCategory::all();
        return view('adminpanel.pages.product.sub-category.create', compact('productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:product_sub_categories,name',
            'product_category_id' => 'required|integer|exists:product_categories,id',
        ]);

        $inputs = $request->all();
        $inputs['slug'] = Str::slug($request->name);
        $inputs['admin_id'] = Auth::guard('admin')->id();
        ProductSubCategory::create($inputs);
        return redirect()->route('admin.product.sub-category.index');
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
    public function edit(ProductSubCategory $productSubCategory)
    {
        return view('adminpanel.pages.product.sub-category.edit', compact('productSubCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:blog_categories,name,'.$id,
        ]);

        $inputs = $request->except(['_token', '_method']);
        $inputs['slug'] = Str::slug($request->name);

        ProductSubCategory::where('id', $id)->update($inputs);
        return redirect()->route('admin.product.sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productSubCategory = ProductSubCategory::findOrFail($id);
        if ($productSubCategory) {
            $productSubCategory->delete();
            return response()->json(['success' => 'Deleted Successfully !']);
        }
        return response()->json(['error' => 'Error while deleting !']);
    }
}
