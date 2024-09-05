<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $register_number
 * @property string|null $name
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereRegisterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Pskill extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_number', 'student_name',
    ];

    public function getStudentNameAttribute()
    {
        // Fetch the student's name based on the register number
        $studentName = DB::table('piclabs')
            ->where('regnumber', $this->register_number)
            ->value('name'); // Use 'name' as a string argument

        return $studentName ? $studentName : 'Not Found';
    }
}
