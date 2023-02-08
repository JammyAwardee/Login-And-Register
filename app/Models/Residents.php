<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }

    public function barangayofficials(){
        return $this->belongsTo(BarangayOfficials::class, 'resident_id');
    }

    public function households(){
        return $this->belongsTo(Households::class, 'household_id');
    }
}
