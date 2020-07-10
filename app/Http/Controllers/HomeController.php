<?php

namespace App\Http\Controllers;

use App\Gig;
use App\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gigs = Gig::all();
        $gigsCount = Gig::all()->count();
        $companyCount = Company::all()->count();
        return view('gigs.dashboard', compact('gigs','gigsCount', 'companyCount'));
    }
}
