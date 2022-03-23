<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use App\Models\Perizinan;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->username != 'adminwebmai')
        {
            $tampil_post = Post::where('author_id', auth()->user()->author_id)->orderBy('created_at', 'desc')->get();
        }
        else
        {
            $tampil_post = Post::get();
        }

        return view('admin.post.index',[
            'title1' => 'Post',
            'title2' => 'daftar post',
            'data' => $tampil_post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create',[
            'title1' => 'Post',
            'title2' => 'daftar post',
            'author' => Author::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->author_id);
        // return $request->file('foto')->store('foto_post');
        $validate = $request->validate([
            'judul' => 'required',
            'slug' => 'max:250',
            'isi' => 'required',
            'kategori' => 'required',
            'tag' => 'required',
            // 'author_id' => 'required',
            'foto' => 'required|image|file|max:10240'
        ]);
        
        $validate['author_id'] = auth()->user()->author_id;
        
        $validate['foto'] = $request->file('foto')->store('foto_post');

        Post::create($validate);
        // dd('sukses');
        return redirect('/admin/post')->with('sukses','sukses menambahkan postingan baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show',[
            'title1' => 'Post',
            'title2' => 'daftar post',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit',[
            'title1' => 'Post',
            'title2' => 'daftar post',
            'post' => $post,
            'author' => Author::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'slug' => 'max:250',
            'isi' => 'required',
            'kategori' => 'required',
            'tag' => 'required',
            'author_id' => 'required',
            'foto' => 'image|file|max:10240'
        ]);
        
        if ($request['foto'] != null) {
            $validate['foto'] = $request->file('foto')->store('foto_post');
        }
        else {
            $validate['foto'] = $post->foto;
        }
        
        
        Post::where('id',$post->id)->update($validate);

        return redirect('/admin/post')->with('sukses', 'sukses mengedit postingan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/admin/post')->with('sukses', 'sukses menghapus postingan');
    }

    public function blog($id)
    {
        return view('post.post',[
            'title' => 'post',
            'data' => Post::find(1),
        ]);
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
