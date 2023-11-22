<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ScholarshipType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::user()->role == 'admin') {
            return to_route('dashboard.admin');
        }
        return to_route('landing');
    }

    public function index()
    {
        return view('home.landing');
    }

    public function scholarship()
    {
        $scholarshipTypes = ScholarshipType::all();
        return view('home.scholarship',[
            'scholarships' => $scholarshipTypes
        ]);
    }
}
