<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Staff::orderBy('created_at', 'desc')->get();
        return view('staff.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:staff,code',
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|unique:staff,phone',
        ]);
        $data = $request->all();
        $status = Staff::create($data);
        if ($status) {
            return redirect()->route('staff.index')->with('success', 'Thêm mới nhân viên thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới nhân viên');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
