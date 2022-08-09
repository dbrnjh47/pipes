<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLot extends Model
{
    use HasFactory;
    protected $fillable = ['services_id', 'information'];
}
