<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Patient::orderBy('created_at', 'desc')->get();
        return view('patient.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:patients,code',
            'name' => 'required',
            'phone' => 'required|unique:patients,phone',
        ]);
        $patient = Patient::create([
            'code' => $request->code,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make(12345678),
        ]);
        if ($patient) {
            return redirect()->route('patient.index')->with('success', 'Thêm mới bệnh nhân thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới bệnh nhân');
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
        $item = Patient::findOrFail($id);
        return view('patient.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Patient::findOrFail($id);
        if ($item) {
            $this->validate($request, [
                'code' => 'required|unique:patients,code,' . $id,
                'name' => 'required',
                'phone' => 'required|unique:patients,phone,' . $id,
            ]);
            $data = $request->all();
            $status = $item->update($data);
            if ($status) {
                return redirect()->route('patient.index')->with('success', 'Cập nhật bệnh nhân thành công');
            } else {
                return back()->with('error', 'Lỗi cập nhật bệnh nhân');
            }
        } else {
            return back()->with('error', 'Không tồn tại bệnh nhân này!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Patient::findOrFail($id);
        if ($item) {
            $status = $item->delete();
            if ($status) {
                return redirect()->route('patient.index')->with('success', 'Xóa bệnh nhân thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa bệnh nhân!');
            }
        } else {
            return back()->with('error', 'Không tồn tại bệnh nhân này!');
        }
    }
}
