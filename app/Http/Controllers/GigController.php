<?php

namespace App\Http\Controllers;

use App\Gig;
use App\Company;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function index()
    {
        $gigs = Gig::orderBy('created_at', 'desc')->get();
        return view('gigs.index', compact('gigs'));
    }

    public function create()
    {
        $company = Company::all();
        return view('gigs.create', compact('company'));
    }

    public function createGig(Request $request)
    {
        $gig = new Gig();
        $gig->role = $request->role;
        $gig->companyID = $request->companyID;
        $gig->country = $request->country;
        $gig->state = $request->state;
        $gig->Address = $request->Address;
        $gig->tags = $request->tags;
        $gig->MinSalary = $request->MinSalary;
        $gig->MaxSalary = $request->MaxSalary;
        $gig->save();

        return redirect()->route('Gigs')->with('message', 'Gig Added Successfully!!');
    }

    public function updateGig($id, Request $request)
    {
        $gig = Gig::findOrFail($id);
        $gig->role = $request->role;
        $gig->company = $request->company;
        $gig->country = $request->country;
        $gig->state = $request->state;
        $gig->Address = $request->Address;
        $gig->tags = $request->tags;
        $gig->MinSalary = $request->MinSalary;
        $gig->MaxSalary = $request->MaxSalary;
        $todo->save();
        return redirect()->route('Gigs')->With('message', 'Gig updated Successfully');
    }

    public function deleteGig($id)
    {
        $gig = Gig::findOrFail($id);
        $gig->delete();

        return redirect()->route('Gigs')->With('message', 'Gig Deleted!!!!');
    }
}
