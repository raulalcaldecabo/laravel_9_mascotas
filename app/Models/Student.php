<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{
    use HasFactory;

    protected $fillable = ['nick', 'pet_name', 'race', 'pet_gender', 'Age', 'Color', 'Human_name', 'Phone', 'student_image'];
}
