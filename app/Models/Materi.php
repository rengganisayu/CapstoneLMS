<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materis';  // Nama tabel, jika tidak mengikuti konvensi plural
    protected $fillable = ['file_name', 'file_path'];  // Kolom yang bisa diisi secara mass-assignment
}
