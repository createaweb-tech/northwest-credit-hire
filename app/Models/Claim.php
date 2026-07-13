<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'car_reg_no',
        'document_type',
        'other_document_type',
        'reference_number',
        'notes',
    ];

    public function files()
    {
        return $this->hasMany(ClaimFile::class);
    }
}
