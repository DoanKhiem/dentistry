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

    public function home()
    {
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('home', compact('doctors', 'services'));
    }

    public function history(Request $request)
    {
        if ($request->filled('phone')) {

            $patient = Patient::where('phone', $request->phone)->first();
            if ($patient) {
                $appointments = Appointment::where('patient_id', $patient->id)->orderBy('created_at', 'desc')->get();
            } else {
                $appointments = [];
            }
        } else {
            $appointments = [];
        }
        return view('history', compact('appointments'));
    }

    public function dashboard()
    {
        $staffs = Staff::orderBy('created_at', 'desc')->get();
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        $patients = Patient::orderBy('created_at', 'desc')->get();
        $appointments = Appointment::orderBy('created_at', 'desc')->get();
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('staffs', 'doctors', 'patients', 'appointments', 'services'));
    }

    public function booking()
    {
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('booking', compact('doctors',  'services'));
    }

    public function bookingCreate(Request $request)
    {
        $patient = Patient::where('phone', $request->phone)->first();
//        dd($patient);
        if ($patient) { // nếu đã tồn tại khách hàng với sđt này
            $data = $request->all();
            $status = $patient->update($data);
        } else {
            $patient = Patient::create([
                'code' => 'BN-' . time(),
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone
            ]);
        }

        $item = Service::findOrFail($request->service_id);
        $appointment = Appointment::create([
            'code' => 'VN-' . time(),
            'patient_id' => $patient->id,
            'doctor_id' => $request->doctor_id,
            'service_id' => $request->service_id,
            'time' => $request->time,
            'price' => $item->price
        ]);
        return redirect()->route('home')->with('success', 'Đặt lịch thành công');

    }
}
