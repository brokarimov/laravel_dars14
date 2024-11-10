<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'asc')->paginate(5);
        return view('pages.post', ['models' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create.post-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',

        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }

        Post::create($data);
        return redirect('/posts')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('pages.show.post-show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('pages.update.post-update', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
            'image' => 'required|max:255',

        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }

        $post->update($data);
        return redirect('/posts')->with('warning', 'Ma\'lumot yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
}
