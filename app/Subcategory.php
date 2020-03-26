<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $fillable=[
        'name',
        'user_id',
        'category_id',
    ];

    //relationship

    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }

    public function category()
    {
        return $this->hasMany('App\Category', 'category_id', 'id');
    }
}
