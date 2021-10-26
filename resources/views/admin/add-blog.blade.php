@extends('admin.layouts.master')

@section('main')


<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Thêm blog</h5>
                        <form class="row" action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Tên blog</label>
                                    <input name="name" placeholder="Nhập tên sản phảm" type="text" class="mb-2 form-control">
                                    @if ($errors->has('name'))
                                        <div class="mb-2 mr-2 badge badge-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="">Trạng thái</label>
                                    <div class="radio">
                                        <input name="status" type="radio" value="0">
                                        Ẩn
                                    </div>
                                    <div class="radio">
                                        <input name="status" type="radio" value="1">
                                        Hiện
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="">Content</label>
                                    <input name="content" placeholder="Nhập content" type="text" class="mb-2 form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label  class="">Ảnh hiển thị</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    @if ($errors->has('file'))
                                        <div class="mb-2 mr-2 badge badge-danger">{{$errors->first('file')}}</div>
                                    @endif
                                    <!-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Thêm blog</button>
                            </div>
                        </form>
                    </div>
                </div>

            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

@endsection
