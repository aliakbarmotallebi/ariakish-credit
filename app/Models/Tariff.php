<?php

namespace App\Models;

use App\Uilities\NumberToWord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = $value;
        $this->attributes['amount_words'] = (new NumberToWord)->numberToWords(substr($value,0 ,-1));
    }

    public function getAmountSubstituteAttribute($value)
    {
        return (new NumberToWord)->numberToWords(substr($value,0 ,-1));
    }
}
