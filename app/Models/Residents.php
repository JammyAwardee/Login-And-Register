<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    use HasFactory;

    /**
    * Accessor for Age.
     */
    public function age()
    {
        return Carbon::parse($this->attributes['b_date'])->age;
    }

    public function scopeFilter($query, array $filters){
        if ($filters['search'] ?? false) {
            $query->where('last_name', 'like', '%' . request('search') . '%')
                ->orWhere('first_name', 'like', '%' . request('search') . '%')
                ->orWhere('middle_name', 'like', '%' . request('search') . '%')
                ->orWhere('civil_status', 'like', '%' . request('search') . '%')
                ->orWhere('employment_status', 'like', '%' . request('search') . '%')
                ;
        }
    }

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
