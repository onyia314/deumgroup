<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at' , 'desc')->paginate(6);
        $categories = Category::has('posts')->get();
        $lands = Land::orderBy('created_at' , 'desc')->paginate(6);
        return view('post.index' , ['posts' => $posts , 'categories' => $categories , 'lands' => $lands]);
    }

    public function adminIndex()
    {
        $posts = Post::orderBy('created_at' , 'desc')->paginate(10);
        return view('post.admin.index' , ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.admin.create' , ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_image' => 'required|file|image|max:1024',
            'categories' => 'required|array|min:1',
            'title' => 'required|string|min:3|max:255|unique:posts',
            'content' => 'required|string|min:5',
        ]);

        $post_image_path = $request->file('post_image')->store('post_images' , 'deum_uploads');
        $post = Post::create([
            'image_path' => $post_image_path,
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title , '-')
        ]);
        $categories_id = $request->categories;
        $post->categories()->attach($categories_id);
        
        return redirect()->back()->with('status' , 'Post Created');
    }

    public function show($slug)
    {
        $post = Post::where('slug' , $slug)->firstOrFail();
        return view('post.show' , ['post' => $post]);
    }

    public function edit($slug)
    {
        $post = Post::where('slug' , $slug)->firstOrFail();
        $post_category_ids = $post->categories->pluck('id')->toArray();
        $categories = Category::all();
        return view('post.admin.edit' , ['post' => $post, 'post_category_ids' => $post_category_ids , 'categories' => $categories]);
    }

    public function update(Request $request, $slug)
    {

        $post = Post::where('slug' , $slug)->firstOrFail();

        $request->validate([
            'post_image' => 'sometimes|file|image|max:1024',
            'categories' => 'required|array|min:1',
            'title' => 'required|string|min:3|max:255|unique:posts,title,' .$post->id,
            'content' => 'required|string|min:5',
        ]);

        $prevPostImagePath = $post->image_path;

        if($request->hasFile('post_image')){
            $post->image_path = $request->file('post_image')->store('post_images' , 'deum_uploads');
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug =  Str::slug($request->title , '-');
        $post->categories()->sync($request->categories);
        $post->save();


        if($post->wasChanged('image_path')){
            Storage::disk('deum_uploads')->delete($prevPostImagePath);
        }
        
        if(!$post->wasChanged()){
            return redirect()->back()->with('status' , 'you changed nothing');
        }

        return redirect()->route('posts.edit' , $post->slug)->with('status' , 'post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug' , $slug)->firstOrFail();
        $post->categories()->detach($post->categories->pluck('id')->toArray());
        Storage::disk('deum_uploads')->delete($post->image_path);
        $post->delete();
        return back()->with('status' , 'post deleted');
    }
}
