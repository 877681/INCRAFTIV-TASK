<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;

    //guarded variable is used to gaurd the columns which you dont want to be mass assigned but since i am leaving it empty that means i am disabling fillables 

    protected $guarded = [];
    protected $table = 'posts';
    public function User() {
        return $this->belongsTo(User::class);
    }
}
