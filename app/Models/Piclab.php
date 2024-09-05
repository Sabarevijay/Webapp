<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $regnumber
 * @property string $name
 * @property string $year
 * @property string $department
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab query()
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereRegnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereYear($value)
 *
 * @mixin \Eloquent
 */
class Piclab extends Model
{
    use HasFactory;

    protected $fillable = [
        'regnumber',
        'name',
        'year',
        'department',
    ];
}
$piclab = Piclab::find(1);
