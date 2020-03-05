<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
use App\Posts ;


class PostController extends Controller
{ function show($slug)
    {  
       
        $post=Posts::where('slug', $slug)->firstOrFail();

       // $post=DB::table('posts')->where('slug', $slug)->first();
       
       
       
       
        //dd($post);
     /*   $posts =[
            'my_first' => 'this  is my first',
            'my_seconde' => 'this  is my seconde'
        ];*/
        // conncetion with db 

        /*if (!array_key_exists($post,$posts))
        { abort(404,'sorry not Found');}
       /* return view ('post',
        ['post'=> $posts[$post] ?? 'Nothing here '
        ]);*/
      //  if(!$post)
      //  {abort(404);}
       return view ('post',
        ['post'=> $post 
        ]);
    }
    //
}
