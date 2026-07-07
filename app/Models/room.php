<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'description',
        'floor',
        'capacity',
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
