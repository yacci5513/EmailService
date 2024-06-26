<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class User extends Model
{
    use HasFactory, softDeletes;

    protected $primaryKey = 'u_id';
    public $timestamps = true;
    
    protected $fillable = [
        'u_email',
        'u_pw',
    ];
}