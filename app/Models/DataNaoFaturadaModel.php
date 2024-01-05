<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNaoFaturadaModel extends Model
{
    use HasFactory;

    protected $table = 'data_nao_faturada';
    protected $primaryKey = 'id';
    protected $fillable = ['data'];
}
