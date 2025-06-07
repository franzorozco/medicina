<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 *
 * @property $id
 * @property $first_name
 * @property $last_name
 * @property $identity_number
 * @property $birth_date
 * @property $gender
 * @property $address
 * @property $phone
 * @property $community
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Appointment[] $appointments
 * @property MedicalRecord[] $medicalRecords
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Patient extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['first_name', 'last_name', 'identity_number', 'birth_date', 'gender', 'address', 'phone', 'community'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany(\App\Models\Appointment::class, 'id', 'patient_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalRecords()
    {
        return $this->hasMany(\App\Models\MedicalRecord::class, 'id', 'patient_id');
    }
    
}
