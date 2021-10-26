@extends('admin.layouts.master')

@section('main')
    <h1>Đăng nhập</h1>
    <form class="form-inline" action="{{route('admin.loginPost')}}" method="post">
        @csrf
        <div class="position-relative form-group">
            <label for="exampleEmail33" class="sr-only">Email</label>
            <input name="email" id="exampleEmail33" placeholder="Email" type="email" class="mr-2 form-control">
        </div>
        <div class="position-relative form-group">
            <label for="examplePassword44" class="sr-only">Password</label>
            <input name="password" id="examplePassword44" placeholder="Password" type="password" class="mr-2 form-control">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
