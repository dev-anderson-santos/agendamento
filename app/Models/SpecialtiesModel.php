<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialtiesModel extends Model
{
    use HasFactory;

    protected $table = 'specialties';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
}
