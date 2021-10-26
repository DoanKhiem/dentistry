@extends('admin.layouts.master')

@section('main')

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Thêm hình ảnh banner</h5>
                        <form class="row" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <!-- <div class="form-group">
                                    <label class="">Tên banner</label>
                                    <input name="name" placeholder="Nhập tên sản phảm" type="text" class="mb-2 form-control">
                                </div> -->

                                <div class="position-relative form-group">
                                    <label  class="">Ảnh banner</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <!-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Thêm hình ảnh banner</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

@endsection
