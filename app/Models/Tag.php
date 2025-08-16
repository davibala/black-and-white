<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'color',
        'content',
    ];
    
    public function User(){
        return $this->belongsTo(User::class);
    }
    
    public function Tasks(){
        return $this->belongsToMany(Task::class);
    }
    
}
