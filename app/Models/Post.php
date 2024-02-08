<?php

namespace App\Models;
use App\Models\Usuario;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
        }
}