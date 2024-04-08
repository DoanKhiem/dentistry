<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

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

        return view('booking', compact('doctors', 'services'));
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
                'code' => 'BN-'.time(),
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
        }

        $item = Service::findOrFail($request->service_id);
        $appointment = Appointment::create([
            'code' => 'VN-'.time(),
            'patient_id' => $patient->id,
            'doctor_id' => $request->doctor_id,
            'service_id' => $request->service_id,
            'time' => $request->time,
            'price' => $item->price,
        ]);

        return redirect()->route('home')->with('success', 'Đặt lịch thành công');
    }

    public function statistical()
    {
        // Lấy ngày đầu tiên và cuối cùng của tháng hiện tại
        $firstDayofMonth = Carbon::now()->startOfMonth();
        $lastDayofMonth = Carbon::now()->endOfMonth();

        $totalAppointment = Appointment::whereBetween('time', [$firstDayofMonth, $lastDayofMonth])->count();

        $totalAppointmentPrice = Appointment::whereBetween('time', [$firstDayofMonth, $lastDayofMonth])->where('status', 2)->sum('price');

        $doctors = Doctor::orderBy('created_at', 'desc')->get();

        return view('statistical', compact('totalAppointment', 'totalAppointmentPrice', 'doctors'));
    }

    public function editProfile()
    {
        $user = User::findOrFail(Auth::guard('admin')->user()->id);

        return view('edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::guard('admin')->user()->id);
        $data = $request->all();
        $status = $user->update($data);
        if ($status) {
            return redirect()->route('edit.profile')->with('success', 'Cập nhật thông tin thành công');
        } else {
            return redirect()->route('edit.profile')->with('error', 'Cập nhật thông tin thất bại');
        }
    }
}
