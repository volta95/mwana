<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //decleare fillable
    protected $fillable=[
        'name',
        'user_id'
    ];

    //relationship
    public function subcategories()
        {
            return $this->belongToMany('App\Subcategory', 'category_id', 'id');
        }

    public function user()
      {
          return $this->hasOne('App\User', 'user_id', 'id');
      }

}
