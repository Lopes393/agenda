<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'contatos';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'id',
        'nome',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'celular',
        'sexo',
        'email',
        'data_nascimento',
        'observacao',
    ];
}
