<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    protected $fillable = ['nome','crmv','especialidade_id'];
}
