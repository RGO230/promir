<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model

{   
    protected $fillable = ['title','descr','preview_image','youtube_flow','streamtoken'];
    use HasFactory;

    public function users(){
        return $this->hasManyThrough(
            User::class, StreamUser::class,
            'stream_id','id','id','user_id'
        );  
    }
    public function messages(){
        return $this->hasMany(Chat::class);
    }
    
}
