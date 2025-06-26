<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gene;

class DashboardController extends Controller
{
    public function index()
    {
        $genes = Gene::withCount('expressions')->take(20)->get(); // first 20 genes
        return view('dashboard.index', compact('genes'));
    }
}

