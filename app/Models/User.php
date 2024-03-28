<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'u_id';
    
    protected $fillable = [
        'u_email',
    ];
}
