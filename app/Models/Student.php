<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'class',
        'address',
        'phone_id',
    ];

    public function phone() {
        return $this->belongsTo(Phone::class);
    }
}
