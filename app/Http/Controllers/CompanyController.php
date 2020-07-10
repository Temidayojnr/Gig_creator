<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('created_at', 'desc')->get();
        return view('gigs.company', compact('companies'));
    }

    // public function create()
    // {
    //     return view('gigs.create_company');
    // }

    public function createCompany(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->location = $request->location;
        $company->save();

        return redirect()->route('CompanyPage');
    }

    public function deleteCompany($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('CompanyPage')->With('message', 'Company Deleted!!!!');
    }
}
