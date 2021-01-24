<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    
    public $table = "notes";
    public $timestamps = true;

    protected $fillable = [
        'Name',
        'Subtitle',
        'Content',
        'Color',
        'Tag'
    ];
}