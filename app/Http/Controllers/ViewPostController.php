<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ViewPostController extends Controller
{
    public function all()
    {
        // if(request('cari'))
        // {
        //     dd(request('cari'));
        // }
        // else
        // {
        //     dd('ada');
        // }
        $post = Post::latest();
        if(request('cari'))
        {
            $first_post = $post->where('judul', 'like', '%' . request('cari') . '%')
                                ->orWhere('isi', 'like', '%' . request('cari') . '%')
                                ->first();
            $posts = $post->where('judul', 'like', '%' . request('cari') . '%')
                            ->orWhere('isi', 'like', '%' . request('cari') . '%')
                            ->skip(1)->take(Post::count()-1);
        }
        else
        {
            $first_post = $post->first();
            $posts = $post->skip(1)->take(Post::count()-1);

        }

        return view('post.full_post',[
            'title' => 'post',
            // 'first_post' => Post::orderBy('created_at','desc')->first(),
            'first_post' => $first_post,
            // "post" => Post::orderBy('created_at', 'desc')->skip(1)->take(Post::count()-1)->get(),
            "post" => $posts->paginate(4),
            'data1' => Post::find(1),
            'data2' => Post::find(2),
            'data3' => Post::find(3),
        ]);
    }

    public function post($slug)
    {
        // $post = Post::where('slug',$slug)->get();
        // dd($post->judul);
        return view('post.post',[
            'title' => 'post',
            'data' => Post::where('slug',$slug)->get(),
        ]);
    }
}
