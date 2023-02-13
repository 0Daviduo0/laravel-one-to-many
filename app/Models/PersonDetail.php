<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'adress',
        'avatar',
    ];

    public function person() {
        return $this -> belongsTo(Person::class);
    }
}
