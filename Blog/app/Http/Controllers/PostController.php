<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view(
            'auth.dashboard',
            ['posts' => $posts, 'categories' => $categories, 'users' => $users, 'posts' => DB::table('posts')->paginate(1)]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:3000',
        ]);

        $post = new Post;
        $file_name = null;
        if ($request->hasFile('image')) {
            $file_name = Storage::disk('public')->put('images', $request->image);
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $file_name;
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post=Post::find($id);
        return View::make('posts.show')
            ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),

        ]);
        $users = User::all();
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view(
            'auth.dashboard',
            ['posts' => $posts, 'categories' => $categories, 'users' => $users]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $users = User::all();
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view(
            'auth.dashboard',
            ['posts' => $posts, 'categories' => $categories, 'users' => $users]
        );
    }
}
