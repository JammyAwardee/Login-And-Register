<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangayOfficials extends Model
{
    use HasFactory;

    public function residents(){
        return $this->hasOne(Residents::class, 'resident_id');
    }

    public function zones(){
        return $this->belongsTo(Zones::class, 'barangay_official_id');
    }
}
