<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medicine
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $unit
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property MedicineDelivery[] $medicineDeliveries
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicine extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description', 'unit'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicineDeliveries()
    {
        return $this->hasMany(\App\Models\MedicineDelivery::class, 'id', 'medicine_id');
    }
    
}
