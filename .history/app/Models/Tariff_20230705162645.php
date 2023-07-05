<?php

namespace App\Models;

use App\Uilities\NumberToWord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    public function setAmountWordsAttribute($value)
    {
        $this->attributes['amount_words'] = NumberToWord::convter($value);
    }
}
