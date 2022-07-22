<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'phone',
        'email'
    ];

    public function address() {
        return $this->hasOne(Address::class);
    }

    public function professor() {
        return $this->hasOne(Professor::class);
    }

    public function student() {
        return $this->hasOne(Student::class);
    }

    public static function getRelationships() {
        return [
            'address',
            'professor',
            'student'
        ];
    }
}
