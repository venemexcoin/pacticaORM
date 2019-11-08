<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/terminos', function () {
    return view('/info.terminos');
});

Route::get('/servImail', function () {
    return view('/info.servImail');
});


Auth::routes();





// Routes

Route::group(['middleware' => ['auth']], function () {

    //web rutas
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('blog', 'Web\PageController@blog')->name('blog');
    Route::get('entrada/{slug}',   'Web\PageController@post')->name('post');
    Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
    Route::get('etiqueta/{slug}',  'Web\PageController@tag')->name('tag');

    //perfil personal
    Route::get('profil/{id}', 'Web\ProfilController@profil')->name('profil');
    Route::get('level/{id}', 'Web\ProfilController@level')->name('level');



    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
        ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
        ->middleware('permission:products.index');

    Route::get('products/create', 'ProductController@create')->name('products.create')
        ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
        ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
        ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
        ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
        ->middleware('permission:products.edit');

    // Users

    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');

    //Administradores

    Route::post('inicio/store', 'InicioController@store')->name('inicio.store')
        ->middleware('permission:inicio.create');

    Route::get('admin', 'InicioController@index')->name('inicio.index')
        ->middleware('permission:inicio.index');

    Route::get('inicio/create', 'InicioController@create')->name('inicio.create')
        ->middleware('permission:inicio.create');

    Route::put('inicio/{inicio}', 'InicioController@update')->name('inicio.update')
        ->middleware('permission:inicio.edit');

    Route::get('inicio/{inicio}', 'InicioController@show')->name('inicio.show')
        ->middleware('permission:inicio.show');

    Route::delete('inicio/{inicio}', 'InicioController@destroy')->name('inicio.destroy')
        ->middleware('permission:inicio.destroy');

    Route::get('inicio/{inicio}/edit', 'InicioController@edit')->name('inicio.edit')
        ->middleware('permission:inicio.edit');

    //Administradores

    Route::resource('admin', 'AdminController');

    //Admin blog

    Route::resource('tags',        'Admin\TagController');

    Route::resource('categories',  'Admin\CategoryController');

    Route::resource('posts',       'Admin\PostController');

    Route::resource('downloads',   'Admin\DownloadController');

    Route::resource('profile',     'ProfileController');

    Route::resource('blogprofile', 'BlogprofileController');

    Route::resource('chat',        'Chat\ChatController');

    Route::resource('chatlogin',   'Chat\ChatUserController');


    Route::resource('comment',     'CommentController');
    Route::name('create_comment_path')->post('/chat/{chat}/comment', 'CommentController@creates');

    Route::name('vote_post_path')->post('/posts/{post}/vote', 'PostVotesController@store');
});
