<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'author', 'title', 'year', 'genre', 'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }}
