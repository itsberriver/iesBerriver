<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "subjects";
    protected $fillable = [
        'subjectName',
        'maths',
        'science',
        'history',
        'philosophy',
        'english',
        'geography',
        'art',
    ];
}
