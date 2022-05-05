<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategories = BlogCategory::orderby('id', 'desc')->get();
        return view('adminpanel.pages.blog-category.index', compact('blogCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pages.blog-category.create');
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
            'name' => 'required|string|unique:blog_categories,name',
        ]);

        $inputs = $request->all();
        $inputs['slug'] = Str::slug($request->name);
        // $inputs['admin_id'] = Auth::guard('admin')->id();
        BlogCategory::create($inputs);
        return redirect()->route('admin.blog-category.index');
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
    public function edit(BlogCategory $blogCategory)
    {
        return view('adminpanel.pages.blog-category.edit', compact('blogCategory'));
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

        BlogCategory::where('id', $id)->update($inputs);
        return redirect()->route('admin.blog-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        if ($blogCategory) {
            if(Blog::where('blog_category_id', $id)->first()){
                $blogCategory->delete();
                Blog::where('blog_category_id', $id)->delete();
            }
            else{
                $blogCategory->forceDelete();
            }
            return response()->json(['success' => 'Deleted Successfully !']);
        }

        return response()->json(['error' => 'Error while deleting !']);
    }
}
