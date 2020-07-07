<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;

class Card extends Model
{
    protected $table = 'card';

    protected $fillable = ['body', 'img'];

    public function user(){

    return $this->belongsTo(User::class);


    }

    public function category(){

    return $this->belongsToMany(Category::class);

    }
}
