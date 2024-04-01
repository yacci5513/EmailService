<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Notice extends Model
{
    use HasFactory, softDeletes;

    protected $primaryKey = 'n_id';
    public $timestamps = true;
    
    protected $fillable = [
        'u_id',
        'n_title',
        'n_content',
    ];
}
