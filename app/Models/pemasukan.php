<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominal',
        'keterangan',
        'tanggal',
    ];
    // protected $table = "pemasukans";
    // protected $primaryKey = "";
    // public $incrementing = "";
    // protected $keyType = "string";
    // public $timestamps = false;
}
