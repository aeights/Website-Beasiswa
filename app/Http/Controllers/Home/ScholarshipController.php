<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScholarshipRequest;
use App\Models\Scholarship;
use App\Models\ScholarshipType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScholarshipController extends Controller
{
    public function apply()
    {
        $scholarships = ScholarshipType::all();
        return view('home.scholarship-apply',[
            'scholarships' => $scholarships
        ]);
    }

    public function result()
    {
        return view('home.scholarship-check');
    }

    public function resultCheck(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|numeric'
        ]);

        if ($validated) {
            $data = Scholarship::where('nim', $request->nim)->first();
            return view('home.scholarship-result',[
                'data' => $data
            ]);
        }
    }

    public function applyStore(ScholarshipRequest $request)
    {
        if (Auth::check()) {
            if ($request->validated()) {
                $apply = Scholarship::create([
                    'user_id' => Auth::user()->id,
                    'nim' => $request->nim,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'semester' => $request->semester,
                    'ipk' => $request->ipk,
                    'scholarship_type_id' => $request->scholarship_type,
                ]);
                if ($request->hasFile('file')) {
                    $apply->addMediaFromRequest('file')->toMediaCollection('file');
                }
                return to_route('scholarship.result.check',['nim' => $request->nim]);
            }
        }
        return to_route('login');
    }
}
