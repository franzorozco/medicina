<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MedicineDelivery
 *
 * @property $id
 * @property $medical_record_id
 * @property $medicine_id
 * @property $quantity
 * @property $notes
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property MedicalRecord $medicalRecord
 * @property Medicine $medicine
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MedicineDelivery extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['medical_record_id', 'medicine_id', 'quantity', 'notes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicalRecord()
    {
        return $this->belongsTo(\App\Models\MedicalRecord::class, 'medical_record_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicine()
    {
        return $this->belongsTo(\App\Models\Medicine::class, 'medicine_id', 'id');
    }
    
}
