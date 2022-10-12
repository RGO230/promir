<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function streams()
    {
        return $this->belongsTo(Stream::class);
    }
}
