<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends  Authenticatable
{
    protected $fillable = ['nisn','name','gender','school_classes_id','password'];

    public function schoolClass() {
    return $this->belongsTo(SchoolClass::class, 'school_classes_id');
    }

    public function grade() {
         return $this->hasOne(Grade::class); 
    }

    // App\Models\Student.php
    public function studentAddress()
    {
        return $this->hasOne(StudentAddress::class, 'nisn', 'nisn');
    }

}
