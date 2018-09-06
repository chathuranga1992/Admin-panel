<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View all posts
        //$posts =  Post::all();
        //return Post::where('title','Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts =  Post::orderBy('title','asc')->get();
        //$posts =  Post::orderBy('title','asc')->get();
        //$posts =  Post::orderBy('title','asc')->take(1)->get();

        $posts =  Post::orderBy('created_at','asc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //crate posts
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //storing post validating required fields
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post= new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success','Post Createed');
        
        //return 123;
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
         $post = Post::find($id);
         return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit Posts
        $post = Post::find($id);

        //user validate
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unotherized Page'); 
        }
        return view('posts.edit')->with('post',$post);


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
        //
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post= Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Remove Post
        $post = Post::find($id);
        
        //user validate
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unotherized Page'); 
        }

        $post->delete();
        return redirect('/posts')->with('success','Post Removed');
    }
}
