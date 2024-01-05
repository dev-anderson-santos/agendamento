<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Notifications\Auth\ResetPassword;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'username',
        'phone',
        'email_verified_at',
        'cpf',
        'inscricao_crp_crm',
        'birth_date',
        'academic_formations',
        'syndromes_special_situations_experience',
        'age_range_service',
        'approach_lines',
        'is_admin',
        'status',
        'last_login_time',
        'last_login_ip'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function hasAddress(): HasOne
    {
        return $this->hasOne(UserHasAddressesModel::class, 'user_id', 'id');
    }

    public function charge()
    {
        return $this->hasOne(ChargeModel::class, 'user_id', 'id');
    }

    public function sendPasswordResetNotification($token)
    {
        $when = Carbon::now()->addSeconds(10);

        $this->notify((new ResetPassword($token))->delay($when));
    }
}
