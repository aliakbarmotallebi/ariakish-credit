<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestRepair extends Model
{
    use HasFactory;

    protected $fillable = [
        "message",
        "cost_amount",
        "appliance_id"
    ];

    /**
     * Get the post that owns the comment.
     */
    public function appliance()
    {
        return $this->belongsTo(Appliance::class);
    }
}
