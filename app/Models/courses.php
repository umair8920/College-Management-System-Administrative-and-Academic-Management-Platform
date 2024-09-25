<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = ['image', 'Name', 'Description','C1','C2','C3','C4','C5','C6'];
}
