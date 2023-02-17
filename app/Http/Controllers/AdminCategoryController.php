<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $attributes =  request()->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        Category::create($attributes);

        return redirect('/admin/category');
    }

    public function show($id)
    {
        ddd($id);
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit',['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $resource = Category::findOrFail($id);

        $attributes = $request->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);

        $resource->update($attributes);

        return redirect('/admin/category');

    }

    public function destroy($id)
    {
        $resource = Category::findOrFail($id);

        $resource->posts()->Delete();
        $resource->delete();


        return redirect('/admin/category');
    }
}
