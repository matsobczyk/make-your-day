<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    public $table = "to_dos";
    public $timestamps = true;


    protected $fillable = [
        'text',
        'is_done',
        'user',
    ];
}