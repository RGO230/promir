<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model

{   
    protected $fillable = ['title','descr','preview_image','youtube_flow'];
    use HasFactory;
    
}
