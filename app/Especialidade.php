<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $fillable = ['nome','descricao','especialidade_id'];
}
