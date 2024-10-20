<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'gender',
        'birthdate',
        'is_active',
    ];
      // Define the one-to-many relationship with MataKuliah
      public function mataKuliahs()
      {
          return $this->hasMany(MataKuliah::class);
      }
}
