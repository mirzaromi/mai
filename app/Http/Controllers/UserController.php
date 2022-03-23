<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Author;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index',[
            'title1' => 'Buat User',
            'title2' => 'buat_user',
            'data' => User::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create',[
            'title1' => 'Buat User',
            'title2' => 'buat_user',
            'data' => Author::get()
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
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
            'author_id' => '',
        ]);
        
        $validate['password'] = bcrypt($validate['password']);

        if ($request['author_id'] == "") {
            $validate['author_id'] = null;
        }
        
        // dd($validate);
        User::create($validate);
        return redirect('/admin/user')->with('sukses', 'sukses menambahkan user baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',[
            'title1' => 'Buat User',
            'title2' => 'buat_user',
            'data' => Author::get(),
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
            'author_id' => '',
        ]);
        
        $validate['password'] = bcrypt($validate['password']);

        if ($request['author_id'] == "") {
            $validate['author_id'] = null;
        }

        User::where('id', $user->id)->update($validate);
        return redirect('/admin/user')->with('sukses', 'sukses mengupdate user baru');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/admin/user')->with('sukses', 'sukses menghapus user baru');
    }
}
