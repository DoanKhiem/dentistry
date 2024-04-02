<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Service::orderBy('created_at', 'desc')->get();
        return view('service.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:services,code',
            'name' => 'required',
            'price' => 'required',
        ]);
        $data = $request->all();
        $status = Service::create($data);
        if ($status) {
            return redirect()->route('service.index')->with('success', 'Thêm mới dịch vụ thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới dịch vụ');
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
        $item = Service::findOrFail($id);
        return view('service.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Service::findOrFail($id);
        if ($item) {
            $this->validate($request, [
                'code' => 'required|unique:services,code,' . $id,
                'name' => 'required',
                'price' => 'required',
            ]);
            $data = $request->all();
            $status = $item->update($data);
            if ($status) {
                return redirect()->route('service.index')->with('success', 'Cập nhật dịch vụ thành công');
            } else {
                return back()->with('error', 'Lỗi cập nhật dịch vụ');
            }
        } else {
            return back()->with('error', 'Không tồn tại dịch vụ này!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Service::findOrFail($id);
        if ($item) {
            $status = $item->delete();
            if ($status) {
                return redirect()->route('service.index')->with('success', 'Xóa dịch vụ thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa dịch vụ!');
            }
        } else {
            return back()->with('error', 'Không tồn tại dịch vụ này!');
        }
    }
}
