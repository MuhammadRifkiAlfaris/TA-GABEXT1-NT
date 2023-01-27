<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;
use Session;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('admin.post.index',['posts' => $posts,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $image = $request->file('image');
        $filename = time()."_".$image->getClientOriginalName();
        $address = 'image_upload';
        $image->move($address,$filename);

        post::create([
            'category_id'=>$request->category_id,
            'title'=> $request->title,
            'description'=> $request->description,
            'image'=> $filename,
        ]);

        return response()->json([
            'success'=>true,
            'message'=>'Post Created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::join('categories','categories.id','=','posts.category_id')->where('posts.id',$id) ->first(['posts.*','categories.name']);
        return $posts;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts =Post::join('categories','categories.id','=','posts.category_id')
            ->where('posts.id',$id)
            ->first(['posts.*','categories.name']);
        return $posts;
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
         $post =Post::findOrfail($id);

        $filename =$post->image;
        if ($request->hasfile('image')) {
            $image_path =public_path().'/image_upload/'.$filename;
            if (file_exists($image_path))
                File::delete($image_path);
                $image = $request->file('image');
                $filename = time()."_".$image->getClientOriginalName();
                $address = 'image_upload';
                $image->move($address,$filename);
        }
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $filename;

        $post->update();

        return response()->json([
            'success'=>true,
            'message'=>'Post Update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::findOrFail($id);

        $filename = $post->image;

        $image_path = public_path().'/image_upload/'.$filename;
        if(file_exists($image_path))
            File::delete($image_path);

        $post->delete();

        return response()->json([
            'success'=>true,
            'message'=>'Post Deleted'
        ]);
    }

public function apiPost()
    {
        //$posts = Post::all(); return response()->json($posts);
       $posts = Post::join('categories','categories.id','=','posts.category_id')->get(['posts.*','categories.name']);
      return response()->json($posts);
        
    }

    public function lihat()
    {
        $posts = DB::table('posts')->get();
        return view('admin.lihat',['posts' => $posts]);
    }
}
    

