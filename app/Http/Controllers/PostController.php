<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function adminStore()
    {

        return view('admin.post', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        try {

            $url = 'test.mp4';
            // $url = Storage::url(Storage::disk('public')->put('videos', $request->video));
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->video_url = $url;
            $post->category_id = $request->category;
            $post->save();
        } catch (\Throwable $th) {
        }
        return redirect()->route('posts_admin');
        // dd($request);
    }
}
