<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClaimFile extends Model
{
    protected $fillable = [
        'claim_id',
        'file_path',
    ];

    public function claim()
    {
        return $this->belongsTo(Claim::class);
    }
}
