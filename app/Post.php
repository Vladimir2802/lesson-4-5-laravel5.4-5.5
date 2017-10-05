<?php

namespace App;

use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes, Statused;

    protected $attributes = [
        'status' => 10
    ];

    public static function boot()
    {
        parent::boot();

        parent::observe(new PostObserver());
    }

    protected $fillable = ['message', 'theme_id'];

    public function theme(){
        return $this->belongsTo(Themes::class, 'theme_id', 'id');
    }
}
