@extends('admin.layouts.master')

@section('main')

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Sửa sản phẩm</h5>
                        <form class="row" action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <input type="hidden" value="{{$product->id}}" name="id">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Tên sản phẩm</label>
                                    <input value="{{$product->name}}" name="name" placeholder="Nhập tên sản phảm" type="text" class="mb-2 form-control">
                                    @if ($errors->has('name'))
                                        <div class="mb-2 mr-2 badge badge-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                <label for="exampleCategory" class="">Thương hiệu</label>
                                    <select name="category_id" class="mb-2 form-control">
{{--                                        <option value="{{$product->id}}">{{$product->name}}</option>--}}
                                        @foreach($category as $value)
                                        <option value="{{$value->id}}" {{$value->id == $product->category_id ? 'selected' : ''}}>{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="exampleCategory" class="">Nhà sản xuất</label>
                                <select name="brand_id" class="mb-2 form-control">
                                    @foreach($brand as $value)
                                        <option value="{{$value->id}}" {{$value->id == $product->brand_id ? 'selected' : ''}}>{{$value->name}}</option>
                                    @endforeach
                                </select>

                                <div class="form-group">
                                    <label class="">Description</label>
                                    <input value="{{$product->description}}" name="description" placeholder="Nhập tên sản phảm" type="text" class="mb-2 form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label  class="">Ảnh hiển thị</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <img style="width: 200px;" src="{{url('uploads')}}/{{$product->img}}" alt="">

                                    <!-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Sửa sản phẩm</button>
                            </div>
                        </form>
                    </div>
                </div>

            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

@endsection
