<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    
    protected $fillable =['title','expert','body'] ;
    public  function path ()
    {
        return route('artical.show',$this );
    }
    public function author()
    {
        return $this->belongsTo(User::class ,'user_id');

    }
    public function tags()
    {
        return $this->belongsToMany(Tage::class);

    }
}
