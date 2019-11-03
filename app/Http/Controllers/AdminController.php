<?php

namespace App\Http\Controllers;


use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:admin.create')->only(['create', 'store']);

        $this->middleware('permission:admin.index')->only('index');

        $this->middleware('permission:admin.edit')->only(['edit', 'update']);

        $this->middleware('permission:admin.show')->only('show');

        $this->middleware('permission:admin.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permission::orderBy('id', 'DESC')->paginate();

        return view('admin.permisos.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $permiso = Permission::create($request->all());

        return redirect()->route('permisos.edit', compact('permiso'))
            ->with('info', 'categorías creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permiso = Permission::find($id);

        return view('admin.permisos.show', compact('permiso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permiso = Permission::find($id);

        return view('admin.permisos.edit', compact('permiso'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permiso = Permission::find($id);

        $permiso->fill($request->all())->save();

        return redirect()->route('admin.edit', $permiso->id)
            ->with('info', 'categorías actualizada con éxito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso = Permission::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
