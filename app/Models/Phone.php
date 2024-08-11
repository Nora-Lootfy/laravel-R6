<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
    ];

    public function student() {
        return $this->hasOne(Student::class);
    }
}
