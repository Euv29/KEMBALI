<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post',
        'tag',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function disciplina(){
        return $this->belongsTo(Disciplina::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}
