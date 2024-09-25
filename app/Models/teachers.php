<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    use HasFactory;
    protected $table = 'teachers';

    protected $fillable = ['Name', 'Role', 'Description', 'Education','Experiences','Expertise','language','position','phone','mail','exp_years','image'];
}
