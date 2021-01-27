<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    public $table = "ToDo";
    public $timestamps = true;

    protected $casts = [
        'is_done' => 'boolean',

    ];

    protected $fillable = [
        'user',
        'is_done',
        'text',
    ];
}