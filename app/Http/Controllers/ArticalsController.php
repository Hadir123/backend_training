<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Artical ;

class ArticalsController extends Controller
{
    //

 public  function show(Artical $artical)
 { // render  a specific one
   // $artical=Artical::find($Id);

   return  view ('artical.show', ['artical'=>$artical]);
 }
 public function index ()
 {// render  a list  of  artical
     $articals = Artical::latest()->get() ;
     return view ('artical.index ', ['artical'=>$articals]);
 }
 public  function create(){
// show  a  view  to  create  a new  artical
return view ('artical.create');
 }
 public  function store()
 {//persiest  the  new  artical
    request()->validate([
        'title'=>'required',
        'body'=>'required',
        'expert'=>'required'
    ]);
/*$artical = new Artical  ();
$artical->title= request('title')
$artical->body= request('body');
$artical->expert= request('expert');
$artical->save() ;*/
Artical::create([
    'title'=> request ('title'),
    'expert'=> request('expert'),
    'body'=>request('body')
]);
return redirect ('/');

 }
 public function edit(Artical $artical)
 {
// show a  view to edit  an existant  artical
//find  an artical
//$artical=Artical::find($Id);
return  view('artical.edit',['artical'=>$artical]);
 }

public function update(Artical $artical)
{
// perseset  the  edit   artical

//$artical=Artical::findOrFail($Id);
/*$artical->title= request('title');
$artical->body= request('body');
$artical->expert= request('expert');
$artical->save() ;*/
$artical->update($this->ValidateArtical());

return redirect ('/articals/' . $artical->id);

}
public function destroy()
{
// delete
}



public function ValidateArtical()
{
    return( request()->validate([
        'title'=>'required',
        'body'=>'required',
        'expert'=>'required'
    ]));

}
}
