<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'priority',
        'due_date',
    ];
    
    public function User(){
        return $this->belongsTo(User::class);
    }
    
    public function Comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
