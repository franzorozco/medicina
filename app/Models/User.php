<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class User
 *
 * @property $id
 * @property $first_name
 * @property $last_name
 * @property $email
 * @property $phone
 * @property $address
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Appointment[] $appointments
 * @property MedicalRecord[] $medicalRecords
 * @property ModelHasRole[] $modelHasRoles
 * @property AttachedFile[] $attachedFiles
 * @property Campaign[] $campaigns
 * @property CampaignFinance[] $campaignFinances
 * @property Donation[] $donations
 * @property Donation[] $donations
 * @property DonationsCash[] $donationsCashes
 * @property DonationRequest[] $donationRequests
 * @property DonationRequest[] $donationRequests
 * @property Event[] $events
 * @property EventParticipant[] $eventParticipants
 * @property ModelHasRole[] $modelHasRoles
 * @property Notification[] $notifications
 * @property Profile[] $profiles
 * @property Recommendation[] $recommendations
 * @property StaffAssignment[] $staffAssignments
 * @property StaffAssignment[] $staffAssignments
 * @property SystemLog[] $systemLogs
 * @property Task[] $tasks
 * @property TaskAssignment[] $taskAssignments
 * @property TaskAssignment[] $taskAssignments
 * @property Transaction[] $transactions
 * @property VolunteerVerification[] $volunteerVerifications
 * @property VolunteerVerification[] $volunteerVerifications
 * @property ModelHasRole[] $modelHasRoles
 * @property AuditLog[] $auditLogs
 * @property Coordinator[] $coordinators
 * @property ModelHasRole[] $modelHasRoles
 * @property Student[] $students
 * @property Tutor[] $tutors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany(\App\Models\Appointment::class, 'id', 'doctor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalRecords()
    {
        return $this->hasMany(\App\Models\MedicalRecord::class, 'id', 'doctor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelHasRoles()
    {
        return $this->hasMany(\App\Models\ModelHasRole::class, 'id', 'model_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachedFiles()
    {
        return $this->hasMany(\App\Models\AttachedFile::class, 'id', 'user_id');
    }
    

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donationRequests()
    {
        return $this->hasMany(\App\Models\DonationRequest::class, 'id', 'user_in_charge_id');
    }
  

    

    
   
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function auditLogs()
    {
        return $this->hasMany(\App\Models\AuditLog::class, 'id', 'user_id');
    }
    
   
  
    
}
