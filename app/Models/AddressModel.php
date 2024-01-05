<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $fillable = [
        'zipcode',
        'street',
        'complement',
        'number',
        'district',
        'city',
        'state'
    ];

    public function roomHasAddresses()
    {
        return $this->hasMany(RoomHasAddressesModel::class, 'address_id');
    }
}
