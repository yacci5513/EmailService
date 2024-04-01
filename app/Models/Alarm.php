<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Alarm extends Model
{
    use HasFactory, softDeletes;

    protected $primaryKey = 'a_id';
    public $timestamps = true;
    
    protected $fillable = [
        'n_id',
        'u_id',
        'a_to_email',
    ];
}
