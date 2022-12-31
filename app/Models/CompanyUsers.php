<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyUsers extends Model
{
    protected $fillable = [
        'name', 'address'
    ];
    protected $table = 'company_user';
}
