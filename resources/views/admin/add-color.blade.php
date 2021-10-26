@extends('admin.layouts.master')

@section('main')

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Thêm màu sản phẩm</h5>
                        <form class="row">
                            <!-- <label class="">Tên sản phẩm</label>
                            <input placeholder="Nhập tên sản phảm" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label class="">Màn hình</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label  class="">Hệ điều hành</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label  class="">Camera sau</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label  class="">Camera trước</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label  class="">Chip</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label  class="">RAM</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label  class="">Bộ nhớ trong</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label  class="">SIM</label>
                            <input placeholder="default" type="text" class="mb-2 form-control">
                            <div class="divider"></div>

                            <label for="exampleCategory" class="">Thương hiệu</label>
                            <select class="mb-2 form-control">
                                <option>Default Select</option>
                            </select>

                            
                            <div class="position-relative form-group">
                                <label for="exampleFile" class="">Ảnh hiển thị</label>
                                <input name="file" id="exampleFile" type="file" class="form-control-file">
                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>

                            <div class="position-relative form-group">
                                <label for="exampleFile" class="">Các hình ảnh khác</label>
                                <input name="file" id="exampleFile" type="file" class="form-control-file">
                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Tên màu sản phẩm</label>
                                    <input placeholder="Nhập tên sản phảm" type="text" class="mb-2 form-control">
                                </div>
                                
    
                                <div class="position-relative form-group">
                                    <label  class="">Ảnh màu sản phẩm</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <!-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Thêm màu sản phẩm</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

@endsection
