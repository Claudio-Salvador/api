<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artigo extends Model{
    

    use SoftDeletes;
    use HasFactory;


    protected $fillable = [
        'name',
        'body',
        'cover',
        'id_user'
    ];


   public function usuario_artigo(){
        
        return $this->hasOne(User::class);
    }
}
