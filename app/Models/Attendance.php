<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'user_id',
        'date',
        'time_in',
        'time_out',
        'latlong_in',
        'latlong_out',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
