<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $guarded  = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'category_id' => 'required',
        );
    
    public function category()
    {
     return $this->belongsTo('App\Category');
    }
}