<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\User;
use Caffeinated\Shinobi\Models\Role;
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
        $users = User::paginate();

        return view('users.Index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        // Imagen cuando suba a la pagina colocar public en local en el Disco
        if ($request->file('avatar')) {
            $path = Storage::disk('public')->put('avatar', $request->file('avatar'));
            $user->fill(['avatar' => asset($path)])->save();
        }
        $user->users()->attach($request->get('users'));

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Entrada creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //dd($user);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //dd($request->file('avatar'));
        //Actualiza el usuario
        $user->update($request->all());

        // Imagen cuando suba a la pagina colocar public en local en el Disco
        if ($request->file('avatar')) {
            $path = Storage::disk('public')->put('avatar', $request->file('avatar'));
            $user->fill(['avatar' => asset($path)])->save();
        }

        // Actualizar Roles
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usero actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
