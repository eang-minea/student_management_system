<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'room_id',
        'student_name',
        'gender',
        'phone_number',
        'email',
        'address',
    ];
       public function room()
    {
        return $this->belongsTo(Room::class);
    }

}
