<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencairan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function masjid(){
        return $this->belongsTo(Masjid::class);
    }
}
