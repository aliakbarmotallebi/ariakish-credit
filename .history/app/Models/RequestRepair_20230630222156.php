<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestRepair extends Model
{
    use HasFactory;

    protected $fillable = [
        "message",
        "appliance_id"
    ];
}
