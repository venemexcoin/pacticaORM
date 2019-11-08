<?php

namespace App\Http\Controllers\Chat;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChatStoreRequest;
use App\Http\Requests\ChatUpdateRequest;
use App\Chat;
use App\User;

class ChatController extends Controller
{
    public function __construct()
    {
        //$this->middleware('permission:chat.create')->only(['create', 'store']);

        //$this->middleware('permission:chat.index')->only('index');

        //$this->middleware('permission:chat.edit')->only(['edit', 'update']);

        //$this->middleware('permission:chat.show')->only('show');

        $this->middleware('permission:chat.destroy')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = Chat::with('user')->orderBy('id', 'desc')->paginate(10);
        //dd($request);

        return view('Chats.index')->with(['chats' => $chats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Chats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChatStoreRequest $request)
    {
        $chat = new Chat;
        $chat->fill(

            $request->only('title', 'description', 'url')
        );

        $chat->user_id = $request->user()->id;

        $chat->save();

        return redirect('chat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        $chat->load('comments', 'comments.user');

        return view('Chats.show', compact('chat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        if ($chat->user_id != \Auth::user()->id) {
            return back()->with('info1', 'Accion Invalida');
        }
        return view('Chats.edit', compact('chat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChatUpdateRequest $request, Chat $chat)
    {
        $chat->update($request->all());

        return redirect()->route('chat.show', $chat->id)
            ->with('info', 'Foro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        if ($chat->user_id != \Auth::user()->id) {
            return back()->with('info1', 'Accion Invalida');
        }
        $chat->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
