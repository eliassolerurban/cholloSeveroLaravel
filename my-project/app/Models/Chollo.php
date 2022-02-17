<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chollo extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this -> belongsToMany(Categoria::class);
    }

    public function attachCategorias($categorias){
        $this -> categoria() -> attach($categorias);
    }
    
    public function detachCategorias($categorias){
        $this -> categoria() -> detach($categorias);
    } 
}
