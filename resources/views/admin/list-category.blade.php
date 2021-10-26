@extends('admin.layouts.master')

@section('main')
    @if(Session::has('errors'))
    <div class="mb-2 mr-2 badge badge-danger">{{Session::get('errors')}}</div>
    @endif
    @if(Session::has('success'))
    <div class="mb-2 mr-2 badge badge-success">{{Session::get('success')}}</div>
    @endif
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Danh sách thương hiệu</h5>
                <form action="" >
                    <div class="search-wrapper active">
                        <div class="input-holder">
                            <input name="key" type="text" class="search-input" placeholder="Type to search">
                            <button type="submit" class="search-icon"><span></span></button>
                        </div>

                    </div>
                </form>
                <table class="mb-0 table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên thương hiệu</th>
                        <th>Đường dẫn</th>
                        <th>Số sản phẩm</th>
                        <th>Trạng thái</th>
                        <th>Logo</th>
                        <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($category as $value)
                    <tr>

                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->slug}}</td>
                        <td>{{$value->numberOfProducts->count()}}</td>
                        <td>{{$value->status == 1 ? 'Hien' : 'An'}}</td>
                        <td>
                            <img style="width: 100px;" src="{{url('uploads')}}/{{$value->logo}}" alt="">
                        </td>
                        <td>
                            <a href="{{route('admin.edit-category', $value->id)}}" class="mb-2 mr-2 btn btn-warning">Sửa</a>
                            <a href="{{route('admin.delete-category', $value->id)}}" onclick="return confirm('Bạn có chắc muốn xóa {{$value->name}} không?')" class="mb-2 mr-2 btn btn-danger btDelete">Xóa</a>
                            <!-- <button class="mb-2 mr-2 btn btn-light"><a target="_blank" href="{{ route('user.products') }}">View</a></button> -->
                        </td>
                    </tr>
                    @empty
                        <div>Khoong cos ban gi nao</div>
                    @endforelse
                    </tbody>
                </table>
                <div class="">
                    {{$category->appends(request()->all())->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
