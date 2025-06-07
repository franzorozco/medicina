<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MedicalRecord
 *
 * @property $id
 * @property $patient_id
 * @property $doctor_id
 * @property $record_date
 * @property $reason
 * @property $diagnosis
 * @property $treatment
 * @property $recommendations
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Patient $patient
 * @property User $user
 * @property MedicineDelivery[] $medicineDeliveries
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MedicalRecord extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['patient_id', 'doctor_id', 'record_date', 'reason', 'diagnosis', 'treatment', 'recommendations'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'doctor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicineDeliveries()
    {
        return $this->hasMany(\App\Models\MedicineDelivery::class, 'id', 'medical_record_id');
    }
    
}
