<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// senthil
/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $regnumber
 * @property string $department
 * @property string $year
 * @property string|null $email_id
 * @property string|null $phone_number
 * @property string|null $father_name
 * @property string|null $father_phone_number
 * @property string|null $father_occupation
 * @property string|null $mother_name
 * @property string|null $mother_phone_number
 * @property string|null $mother_occupation
 * @property string|null $address
 * @property string|null $city
 * @property string|null $district
 * @property string|null $pincode
 * @property string|null $hostel_namee
 * @property string|null $hostel_room_number
 * @property string|null $warden_name
 * @property string|null $warden_phone_number
 * @property string|null $care_taker_name
 * @property string|null $care_taker_phone_number
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCareTakerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCareTakerPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFatherOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFatherPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereHostelNamee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereHostelRoomNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMotherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMotherOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMotherPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRegnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereWardenName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereWardenPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereYear($value)
 *
 * @mixin \Eloquent
 */
class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'regnumber',
        'department',
        'year',
        'email_id',
        'phone_number',
        'email_id',
        'phone_number',
        'father_name',
        'father_phone_number',
        'father_occupation',
        'mother_name',
        'mother_phone_number',
        'mother_occupation',
        'address',
        'city',
        'district',
        'pincode',
        'hostel_namee',
        'hostel_room_number',
        'warden_name',
        'warden_phone_number',
        'care_taker_name',
        'care_taker_phone_number',
        'user_id',
    ];
}
