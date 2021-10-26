@extends('admin.layouts.master')

@section('main')

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Sửa thương hiệu</h5>
                        <form class="row" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="">Tên thương hiệu</label>
                                    <input value="{{$category->name}}" name="name" placeholder="Nhập tên sản phảm" type="text" class="mb-2 form-control">
                                    @if ($errors->has('name'))
                                        <div class="mb-2 mr-2 badge badge-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="">Trạng thái</label>
                                    <div class="radio">
                                        <input name="status" type="radio" value="0" {{$category->status == 0 ? 'checked' : ''}}>
                                        Ẩn
                                    </div>
                                    <div class="radio">
                                        <input name="status" type="radio" value="1" {{$category->status == 1 ? 'checked' : ''}}>
                                        Hiện
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="">Đường dẫn</label>
                                    <input value="{{$category->slug}}" name="slug" placeholder="Nhập ram" type="text" class="mb-2 form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label  class="">Logo thương hiệu</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <img src="{{url('uploads')}}/{{$category->logo}}" alt="" style="width: 200px;">

                                <!-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
                                </div>
{{--                                <div class="position-relative form-group">--}}
{{--                                    <label  class="">Logo thương hiệu</label>--}}
{{--                                    <input name="file" id="exampleFile" type="file" class="form-control-file">--}}
{{--                                    <!-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->--}}
{{--                                </div>--}}
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Sửa thương hiệu</button>
                            </div>
                        </form>
                    </div>
                </div>

            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

@endsection
