<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleNextMonthMirrorLog extends Model
{
    use HasFactory;

    protected $table = 'schedule_next_month_mirror_log';
    protected $fillable = ['message', 'email', 'log'];
}
