<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Currency;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        "name"
        ,"contribution"
        ,"timeline"
        ,"currency_id"
        ,"loan_limit"
        ,"periodicals"
        ,"status"
        ,"person_limit"
        ,"is_deleted"
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
