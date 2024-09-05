<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $pskill_name
 * @property string $level
 * @property string $date
 * @property string $status
 *
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile wherePskillName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class StudentProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'pskill_name',
        'level',
        'date',
        'status',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
