<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'nome', 'valor', 'tipo_produto',
    ];
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at', 'created_at', 'updated_at',
    ];
}
