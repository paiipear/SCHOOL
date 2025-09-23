<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;


class SchoolClass extends Model
{
    protected $fillable = ['grade_level', 'major', 'rombel'];

    public function students()
    {
        return $this->hasMany(Student::class, 'school_classes_id');
    }

    public function getClassNameAttribute(): string
    {
        return "{$this->grade_level} {$this->major} {$this->rombel}";
    }

}
