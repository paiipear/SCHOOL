<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterAddress extends Model
{
    protected $table = 'master_addresses';
    protected $primaryKey = 'postal_code';
    protected $fillable = [
        'postal_code',
        'subdistrict',
        'district',
        'city_regency',
        'province'
    ];

    
}
