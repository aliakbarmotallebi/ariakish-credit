<?php

namespace App\Models;

use App\Models\Contracts\StatusInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model implements StatusInterface
{
    use HasFactory, SoftDeletes;

    
    const STATUS_PUBLISH   = 'PUBLISH';
    const STATUS_UN_PUBLISH  = 'UN_PUBLISH';

    public function isAcceptedStatus(): string
    {
        return 'PUBLISH';
    }

    public function isRejectedStatus(): string
    {
        return 'UN_PUBLISH';
    }

    /**
     * @return void
     */
    public function press(): void {
        
        $status = $this->isAcceptedStatus();

        if ($this->status == $this->isAcceptedStatus()) {
            $status = $this->isRejectedStatus();
        }

        $this->status = $status;
        $this->save();
    }

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'name',
        'status',
    ];

    public function scopeEnables($query)
    {
        return $query->whereStatus(self::STATUS_PUBLISH);
    }
}
