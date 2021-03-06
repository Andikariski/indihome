<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelanggan extends Model
{
    use HasFactory;
    protected $table = "data_pelanggan";
    protected $fillable = [
        'tahun',
        'januari',
        'februari',
        'maret',
        'april',
        'mei',
        'juni',
        'juli',
        'agustus',
        'september',
        'oktober',
        'november',
        'desember'
    ];
}
