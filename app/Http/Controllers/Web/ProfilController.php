<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profil;
use App\User;
use App\Level;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profil($id)
    {

        $user = User::where('id', $id)->first();

        $posts = $user->posts()->with('category', 'image', 'tags')
            ->withCount('comments')->get();

        $videos = $user->videos()->with('category', 'image', 'tags')
            ->withCount('comments')->get();

        //dd($user->profile->facebook);
        return view('blog.profil', compact('user', 'posts', 'videos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function level($id)
    {

        $level = Level::where('id', $id)->first();

        $posts = $level->posts()->with('category', 'image', 'tags')
            ->withCount('comments')->get();

        $videos = $level->videos()->with('category', 'image', 'tags')
            ->withCount('comments')->get();

        //dd($level->profile->facebook);
        return view('blog.level', compact('level', 'posts', 'videos'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
