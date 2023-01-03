<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCompanyMapping extends Model
{
    protected $fillable = [
        'company_id','user_id'
    ];
    protected $table = 'user_company_mapping';
}
