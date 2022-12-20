<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SiteController extends Controller
{
    //
    public function index()
    {
        $start = Carbon::parse(date('Y-m-d', strtotime('-20 days')));
        $end = Carbon::parse(date('Y-m-d'));
        try {

            $posts = Post::whereDate('created_at', '<=', $end)
                ->whereDate('created_at', '>=', $start)
                ->get()->random(5);
        } catch (\Throwable $th) {
            $posts = Post::whereDate('created_at', '<=', $end)
                ->whereDate('created_at', '>=', $start)
                ->get();
        }

        return view('site.index', [
            'posts' => $posts
        ]);
    }
}
