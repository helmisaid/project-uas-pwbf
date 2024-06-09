<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'idmahasiswa';

    protected $fillable = array (
        'nama',
        'nim',
        'no_wa',
        'created_at',
        'update_at'
    );

    // protected $attributes = array (
    //     'no_wa' => ''
    // );
}
