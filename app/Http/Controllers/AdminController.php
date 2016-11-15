<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PostDataRequest;

use App\Post;

use App\Category;

use Redirect;

use Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
		return view('admin.admin_posts')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$categories  = Category::all();
		
        return view('admin.add_post')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostDataRequest $request)
    {
        /*validate form input
		$this->validate($request,[
			'title' => 'required',
			'body' => 'required',
			'author' => 'required',
			'published' => 'required',
			'image' => 'image'
			
		]);
		*/
		
		$post = new Post;
		$post->title = $request->title;
		$post->body = $request->body;
		$post->author = $request->author;
		$post->published = $request->published; 
		$post->category = $request->category; 
		$destinationPath = public_path();
		$destinationPath .= "/images" ;
		$complete_name = "";
		
		if($request->hasFile('image')){
				//check if an image is present
			 
				//check if there were no problems uploading the file
				$file = $request->file('image');
				
				$complete_name = $file->getClientOriginalName(); 
				
				$request->file('image')->move($destinationPath,$file->getClientOriginalName() );
			 
		}
		$post->image = $complete_name;
		$post->save();
		
		$request->session()->flash('flash_message', 'Post added');
		//Session::flash('message', 'Post added');
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
        $post = Post::find($id);
		$categories = Category::all();
		$cat = Category::find($post->category);
		
		
		if(!$post){
			abort('404');
		}
		
		return view('admin.edit_post', ['post' => $post, 'cat' => $cat, 'categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
		$categories = Category::all();
		$cat = Category::find($post->category);
		
		
		if(!$post){
			abort('404');
		}
		 
		return view('admin.edit_post', ['post' => $post, 'cat' => $cat, 'categories' => $categories]);
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
        //validate form input
		$this->validate($request,[
			'title' => 'required',
			'body' => 'required',
			'author' => 'required',
			'published' => 'required' 
			
		]);
		
		$post = Post::find($id);
		$post->title = $request->title;
		$post->body = $request->body;
		$post->author = $request->author;
		$post->published = $request->published; 
		$post->category = $request->category; 
		$destinationPath = public_path();
		$destinationPath .= "/images" ;
		$complete_name = "";
		
		if($request->hasFile('image')){
				//check if an image is present
			 
				//check if there were no problems uploading the file
				$file = $request->file('image');
				
				$complete_name = $file->getClientOriginalName(); 
				
				$request->file('image')->move($destinationPath,$file->getClientOriginalName() );
				$post->image = $complete_name;
		}
		
		$post->save();
		$request->session()->flash('message', 'Task was successful!');
		
		return redirect('admin')->with('message', 'Post has been updated');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
		$post->delete();
		
		return redirect('admin')->with('message','successfully deleted');
    }
}
