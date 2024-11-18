<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; //give us method & properties to interact with DB

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'summary', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
