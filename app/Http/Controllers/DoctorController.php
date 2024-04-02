<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Doctor::orderBy('created_at', 'desc')->get();
        return view('doctor.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:doctors,code',
            'name' => 'required',
            'specialize' => 'required',
            'phone' => 'required|unique:doctors,phone',
        ]);
        $data = $request->all();
        $status = Doctor::create($data);
        if ($status) {
            return redirect()->route('doctor.index')->with('success', 'Thêm mới bác sĩ thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới bác sĩ');
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
        $item = Doctor::findOrFail($id);
        return view('doctor.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Doctor::findOrFail($id);
        if ($item) {
            $this->validate($request, [
                'code' => 'required|unique:doctors,code,' . $id,
                'name' => 'required',
                'specialize' => 'required',
                'phone' => 'required|unique:doctors,phone,' . $id,
            ]);
            $data = $request->all();
            $status = $item->update($data);
            if ($status) {
                return redirect()->route('doctor.index')->with('success', 'Cập nhật bác sĩ thành công');
            } else {
                return back()->with('error', 'Lỗi cập nhật bác sĩ');
            }
        } else {
            return back()->with('error', 'Không tồn tại bác sĩ này!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Doctor::findOrFail($id);
        if ($item) {
            $status = $item->delete();
            if ($status) {
                return redirect()->route('doctor.index')->with('success', 'Xóa bác sĩ thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa bác sĩ!');
            }
        } else {
            return back()->with('error', 'Không tồn tại bác sĩ này!');
        }
    }
}
