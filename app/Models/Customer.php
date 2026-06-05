<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'telepon',
        'email'
    ];

    public $timestamps = false;

    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $keyType = 'string';
}
