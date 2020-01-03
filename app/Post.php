<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //1つのpostと紐づいているのは一人のユーザーなので、メソッド愛依は単数系
    public function user() {

        return $this->belongsTo('App\User');
    }
}
