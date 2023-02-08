<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Households extends Model
{
    use HasFactory;

    public function residents(){
        return $this->hasMany(Residents::class, 'household_id');
    }
}
