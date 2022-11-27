<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title','descr','video','image','price'];
    use HasFactory;

    public function users(){
        return $this->hasManyThrough(
            User::class, CourseUser::class,
            'course_id','id','id','user_id'
        );  
    }
    public function paycheck(){
        return $this->hasOne(CourseUser::class);
    }
    


    // public function users(){
    //     return $this->belongsToMany(User::class);
    // }
}
