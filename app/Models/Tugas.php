<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = ['tugas_link', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
