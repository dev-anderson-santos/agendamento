<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsModelLog extends Model
{
    use HasFactory;

    protected $table = 'settings_log';
    protected $fillable = [
        'user_id',
        'settings_id',
        'valor_fixo',
        'valor_avulso',
        'dia_fechamento',
        'data_vencimento',
    ];
}
