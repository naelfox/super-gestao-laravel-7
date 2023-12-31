<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    protected $table = 'fornecedores';
    protected $fillable =  ['nome', 'site', 'uf', 'email'];

    public function produto(){
        return $this->hasMany(Produto::class, 'fornecedor_id', 'id');
    }
}
