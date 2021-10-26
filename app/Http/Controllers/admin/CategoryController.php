<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryAddRequest;
use App\Http\Requests\CategoryEditRequest;
use App\Models\admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::orderBy('created_at','DESC')->search()->paginate(2);
        return view('admin.list-category', compact('category'));
    }

    public function add(){
        return view('admin.add-category');
    }
    public function create(CategoryAddRequest $request){
//        dd($request->all());
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();

            $file->move(public_path('uploads'),$file_name);
            $request->merge(['logo'=>$file_name]);

        }
        else{
            $file_name='';
        }

        $category = Category::create($request->all());
        if ($category){
            return redirect()->route('admin.list-category')->with('success','Thêm mới thành công');
        }else{
            return redirect()->route('admin.list-category')->with('success','Thêm mới thất bại');

        }
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin.edit-category', compact('category'));
    }

    public function update(CategoryEditRequest $request, $id){
        $category = Category::find($id);

        if ($request->hasFile('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
            $request->merge(['logo'=>$file_name]);

        }

        $category->update($request->all());
        if ($category){
            return redirect()->route('admin.list-category')->with('success',"Sửa thành công danh mục $category->name");
        }
    }

    public function delete($id){
        $category = Category::find($id);

        if ($category->numberOfProducts->count() > 0){
            return redirect()->route('admin.list-category')->with('errors',"Không thể xóa danh mục $category->name");
        } else{
            $category->delete();
            return redirect()->route('admin.list-category')->with('success',"Xóa danh mục $category->name thành công");
        }


//        return redirect()->back();

    }
}
