<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Opening_hours extends Model
{
    protected $table = 'code.opening_hours';

    public $timestamps = false;# mudar aqui para True caso queira usar os campos created_at e updated_at

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}