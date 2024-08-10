<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'occupation',
        'image',
        'cnic',
        'portal_id',
        'vital_id',
        'phone',
        'address',
        'gender',
        'bed_no',
        'ward_no',
        'attend_name',
        'nok_no',
        'nok_name',
        'patient_history',
        'dob',
        'patient_type_id',
        'status',
        'provider_id',
        'entry_date',
        'enter_by',
    ];

    public function getAgeAttribute() {
        return Carbon::parse($this->attributes['dob'])->age;
    }
    public function getFullNameAttribute(){
        return ucwords($this->attributes['first_name'].' '.$this->attributes['last_name']);
    }
}
