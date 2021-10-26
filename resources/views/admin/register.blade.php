@extends('admin.layouts.master')

@section('main')
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Controls Types</h5>
                <form class="" method="post">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">First name</label>
                        <input name="first_name" placeholder="with a placeholder" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Last name</label>
                        <input name="last_name" placeholder="with a placeholder" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Địa chỉ</label>
                        <input name="address" placeholder="with a placeholder" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Số điện thoại</label>
                        <input name="phone" placeholder="with a placeholder" type="text" class="form-control">
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
                    <button class="mt-1 btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
