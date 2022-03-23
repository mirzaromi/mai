<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.author.index',[
            'title1' => 'Buat Author',
            'title2' => 'daftar_author',
            'author' => Author::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create',[
            'title1' => 'Buat Author',
            'title2' => 'daftar_author',
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
        $validate = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'des_singkat' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'foto' => 'required'
        ]);

        $validate['foto'] = $request->file('foto')->store('foto_author');

        Author::create($validate);

        return redirect('/admin/author')->with('sukses', 'sukses menambahkan author baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view('admin.author.show',[
            'title1' => 'Buat Author',
            'title2' => 'daftar_author',
            'author' => $author
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit',[
            'title1' => 'Buat Author',
            'title2' => 'daftar_author',
            'author' => $author
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'des_singkat' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'foto' => 'required'
        ]);

        $validate['foto'] = $request->file('foto')->store('foto_author');

        Author::where('id',$author->id)->update($validate);

        return redirect('/admin/author')->with('sukses', 'sukses menambahkan author baru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        Author::destroy($author->id);
        return redirect('admin/author')->with('sukses', 'sukses menghapus author');
    }
}
