<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::with('address')->get();
    }

    public function show($id)
    {
        #$company = Company::find($id); traz apenas a tabela que eu  quero
        #$company = Company::with(['address:id,company_id,city'])->find($id); # trazer detalhado
        $company = Company::with(['address', 'phones', 'opening_hours'])->find($id);

        if (!$company) {
            return response()->json([
                #'success' => false,
                'message' => 'Empresa não localizada.'
            ], 404);
        }

        return new CompanyResource($company);
            #'success' => true,
            #'data' => $company,
            #'address' => $company->address
            #'address' =>[
            #    'street'=> $company->address->street,
            #    'number'=> $company->address->number,
            #]
        #]);
    }

    public function barbershop()
    {
        return Company::with('address')
            ->whereHas('companyType', function ($query) {
                $query->where('slug', 'barbershop');
            })
            ->get();
    }
}