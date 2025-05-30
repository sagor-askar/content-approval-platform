<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', ['posts' => Post::with('categories', 'tags')->latest()->get()]);
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
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
            'categories' => 'array',
            'tags' => 'nullable|string', // expecting comma-separated string
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $paths = ImageHelper::uploadWithThumbnail($request->file('image'));
            $data['image_path'] = $paths['original'];
            $data['thumbnail_path'] = $paths['thumbnail'];
        }

        // Add user ID and default status
        $data['user_id'] = auth()->id();
        $data['status'] = 'pending';

        // Convert tags string to JSON array
        $data['tags'] = $request->filled('tags')
            ? json_encode(array_map('trim', explode(',', $request->tags)))
            : null;

        // Create the post
        $post = Post::create($data);

        // Attach categories
        if (!empty($data['categories'])) {
            $post->categories()->attach($data['categories']);
        }

        return redirect()->route('posts.index')->with('success', 'Post created!');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }

    public function archivedStories()
    {
        $posts = Post::where('status', 'archived')->get();
        return view('posts.archived', compact('posts'));
    }
}
