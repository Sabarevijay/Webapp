<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_type',
        'purpose',
        'from_date',
        'to_date',
        'user_id',
        'student_name',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
