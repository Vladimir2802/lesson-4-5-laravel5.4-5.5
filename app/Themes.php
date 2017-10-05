<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use Selectable;

    public function posts(){
        return $this->hasMany(Post::class, 'theme_id', 'id');
    }
}
