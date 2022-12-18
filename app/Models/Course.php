<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title','descr','video','image','price','category','course_id','userdescr'];
    use HasFactory;
    public const CATEGORIES= ['Ретрит','Абонемент в женский клуб','Медитация','Блоки','Милые завтраки','Курсы','Личная консультация'];

    public function users(){
        return $this->hasManyThrough(
            User::class, CourseUser::class,
            'course_id','id','id','user_id'
        );  
    }
    


    // public function users(){
    //     return $this->belongsToMany(User::class);
    // }
    public function subCourses(){
       return $this->hasMany(Course::class);
    }
}
