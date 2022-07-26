<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public $fillable = [
        'person_id',
        'street',
        'city',
        'state',
        'postal_code',
        'country'
    ];

    public function person() {
        return $this->belongsTo('Person');
    }
}
