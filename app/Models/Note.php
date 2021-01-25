<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public $table = "notes";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'subtitle',
        'content',
        'color',
        'tag'
    ];
}
