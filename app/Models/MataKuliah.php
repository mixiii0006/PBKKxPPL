<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
         'kode',
         'sks',
         'dosen_id'];

    // Define the inverse relationship with Dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
