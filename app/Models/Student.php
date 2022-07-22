<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $fillable = [
        'person_id',
        'number',
        'is_elegible_to_enroll'

    ];

    public function person() {
        return $this->belongsTo('Person');
    }
}
