<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'task_id',
        'user_id',
        'content',
    ];
    
    public function User(){
        return $this->belongsTo(User::class);
    }
    
    public function Task(){
        return $this->belongsTo(Task::class);
    }
}
