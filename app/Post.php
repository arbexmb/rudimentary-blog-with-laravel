<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'subtitle', 'content'];

    public function author()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
