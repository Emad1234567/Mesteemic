<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategoryTransactions extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' ,'category_id' ,'payment_methods_id' ,'status' ,'due_date'];
}
