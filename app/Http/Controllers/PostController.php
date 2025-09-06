<?php
namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    // Enregistrer un post
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'img' => 'nullable|image|max:2048',
        ]);

        $post = new post();
        $post->user_id = auth()->id();
        $post->description = $request->input('description');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $post->img = 'images/' . $imageName;
        }

        $post->like = 0;
        $post->dislike = 0;
        $post->save();

        return redirect()->route('home')->with('success', 'Post created successfully.');
    }
}

