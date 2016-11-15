<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Http\Requests\CategoryDataRequest;

use Redirect;

use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
		return view('admin.categories')->with('categories' , $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = Category::all();
		
        return view('admin.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryDataRequest $request)
    {
        //insert new category
		$category = new Category;
		$category->title = $request->title;
		$category->description = $request->description;
		
		$category->save();
		$request->session()->flash('flash_message', 'Category Successfully Added');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
		
		if(!$category){
			abort('404');
		}
		
		return view('admin.edit_category')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
		
		if(!$category){
			abort('404');
		}
		
		return view('admin.edit_category')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryDataRequest $request, $id)
    {
        $category = Category::find($id);
		$category->title = $request->title;
		$category->description = $request->description;
		
		$category->save();
		$request->session()->flash('message', 'Task was successful!');
		return redirect('category')->with('message', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Category::find($id);
		$post->delete();
		
		return redirect('category')->with('message','successfully deleted');
    }
}
