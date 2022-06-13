<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

public function student()
{
    return $this->belongsTo(Student::class);
}
public function materia()
{
    return $this->belongsTo(Materia::class);
}
}
