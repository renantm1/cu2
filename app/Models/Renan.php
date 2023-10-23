<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renan extends Model
{
    use HasFactory;
    protected $fillable=["email","nome","area","periodo","telefone"];
    protected $table="banco3";
}
