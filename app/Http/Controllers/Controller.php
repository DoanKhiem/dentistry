<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Staff;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard()
    {
        $staffs = Staff::orderBy('created_at', 'desc')->get();
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        $patients = Patient::orderBy('created_at', 'desc')->get();
        $appointments = Appointment::orderBy('created_at', 'desc')->get();
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('staffs', 'doctors', 'patients', 'appointments', 'services'));
    }

    public function booking(Request $request)
    {
        dd($request->all());
    }
}
