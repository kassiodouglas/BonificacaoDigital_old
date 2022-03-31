<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    use HasFactory;

    protected $table = 'tb_users';

    #esconde da serialização
    protected $hidden = ['password'];

    #campos permitidos para inserção em massa
    protected $fillable = [];

    #campos NAO permitidos para inserção em massa
    protected $guarded = [];
}
