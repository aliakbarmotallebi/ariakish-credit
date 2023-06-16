<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        "resnumber",
        "bank_name",
        "amount",
        "result",
        "return_url",
        "wallet_id",
        "user_id",
    ];


    const STATUS_PAID   = 'STATUS_PAID';
    const STATUS_NONPAID    = 'STATUS_NONPAID';

    public function getAmount()
    {
        return number_format($this->amount);
    }

    public function setStatusAttribute($value)
    {
        if($value == self::STATUS_PAID){
            $this->wallet()->update([
                'status' => 'STATUS_COMPLETED'
            ]);
        }

        $this->attributes['status'] = $value;
    }


    public function getDate()
    {
        return verta($this->created_at)->format('%B %d، %Y');
    }

    public function getTime()
    {
        return verta($this->created_at)->format('H:i');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function paymentable()
    {
        return $this->morphTo();
    }
}
