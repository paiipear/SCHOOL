<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['student_id', 'score', 'result'];

    protected static function booted()
    {
        static::saving(function ($grade) {
            if (is_null($grade->score)) {
                $grade->result = 'Belum Ada Status';
            } elseif ($grade->score >= 70) {
                $grade->result = 'Lulus';
            } else {
                $grade->result = 'Tidak Lulus';
            }
        });
    }
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
