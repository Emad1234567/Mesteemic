<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
