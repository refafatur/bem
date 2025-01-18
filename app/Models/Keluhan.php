<?php
// app/Models/Keluhan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = 'keluhan';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'telp',
        'tanggal'
    ];

    // Aktifkan timestamp
    public $timestamps = true;
}
