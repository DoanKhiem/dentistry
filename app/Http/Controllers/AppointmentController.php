<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Appointment::orderBy('created_at', 'desc')->get();
        return view('appointment.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = Patient::orderBy('created_at', 'desc')->get();
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('appointment.create', compact('doctors', 'services', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:appointments,code',
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'service_id' => 'required',
            'time' => 'required',
        ]);
        $item = Service::findOrFail($request->service_id);
        $request->merge(['price' => $item->price]);
        $data = $request->all();
        $status = Appointment::create($data);
        if ($status) {
            return redirect()->route('appointment.index')->with('success', 'Thêm mới cuộc hẹn thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới cuộc hẹn');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patients = Patient::orderBy('created_at', 'desc')->get();
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        $services = Service::orderBy('created_at', 'desc')->get();
        $item = Appointment::findOrFail($id);
        return view('appointment.edit', compact('item', 'patients', 'doctors', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Doctor::findOrFail($id);
        $this->validate($request, [
            'code' => 'required|unique:appointments,code,' . $id,
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'service_id' => 'required',
            'time' => 'required',
            'status' => 'required',
        ]);
        $service = Service::findOrFail($request->service_id);
        $request->merge(['price' => $service->price]);
        $data = $request->all();
        $status = $item->update($data);
        if ($status) {
            return redirect()->route('appointment.index')->with('success', 'Sửa cuộc hẹn thành công');
        } else {
            return back()->with('error', 'Lỗi sửa cuộc hẹn');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
