<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Addresses;
use App\Models\Phones;
use App\Models\CompanyType;

class Company extends Model
{
    protected $table = 'code.company';

    public $timestamps = false;# mudar aqui para True caso queira usar os campos created_at e updated_at

    public function address()
    {
        return $this->hasOne(Addresses::class, 'company_id');
    }

    public function phones()
    {
        return $this->hasMany(Phones::class, 'company_id');
    }

    public function opening_hours()
    {
        return $this->hasMany(Opening_hours::class, 'company_id');
    }

    public function companyType()
    {
        return $this->belongsTo(CompanyType::class, 'type');
    }
}