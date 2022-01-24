<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_supplier',
        'nama_usaha',
        'email',
        'alamat',
        'no_npwp',
        'password',
        'status',
        'token'
    ];
}
