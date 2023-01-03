<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyUsers extends Model
{
    protected $fillable = [
        'name', 'address'
    ];
    protected $table = 'company_user';

    public function UserCompany()
    {
        return $this->belongsTo('App\Models\UserCompanyMapping','user_id');
    }
}
