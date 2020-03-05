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
    return view('test');
});
Route::get('/welcome', function () {
    return view ('welcome');
});
Route::get('/contact', function () {
    return view ('contact');
});
Route:: get('test', function(){
    $name = request('name');
    return view ('test', ['name'=>$name]);
});
/*Route::get('/posts/{post}',function($post){
    $posts =[
        'my_first' => 'this  is my first',
        'my_seconde' => 'this  is my seconde'
    ];
    if (!array_key_exists($post,$posts))
    { abort(404,'sorry not Found');}
   /* return view ('post',
    ['post'=> $posts[$post] ?? 'Nothing here '
    ]);*/
   /* return view ('post',
    ['post'=> $posts[$post]
    ]);
});*/
Route :: get ('/posts/{post}','PostController@show');
Route :: get('/about', function()
{$artical=App\Artical::latest()->get() ;
  //  return $artical ;

return view ('About',
[
    'articals'=>$artical
]);

});
Route :: get ('/articals','ArticalsController@index');
Route::post('articals/','ArticalsController@store');
Route :: get ('/articals/create','ArticalsController@create');

Route :: get ('/articals/{artical}','ArticalsController@show')->name('artical.show');
Route::get('/articals/{artical}/edit', 'ArticalsController@edit');
Route ::put ('/articals/{artical}','ArticalsController@update');


