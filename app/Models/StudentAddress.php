<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    protected $table = 'student_addresses';

    protected $fillable = [
        'nisn',
        'street',
        'number',
        'rt',
        'rw',
        'postal_code'
    ];

    // Relasi ke Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'nisn', 'nisn');
    }

    public function masterAddress()
    {
        return $this->belongsTo(MasterAddress::class, 'postal_code', 'postal_code');
    }

    public function getFullAddressAttribute(): string
    {
        return "Jl. {$this->street} No.{$this->number}, RT {$this->rt}/RW {$this->rw}, {$this->postal_code}";
    }

}
