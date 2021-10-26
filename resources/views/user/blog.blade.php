@extends('user.layouts.master')

@section('title', 'blog')


@section('main')

        <!-- Blog Page Start Here -->
        <div class="blog ptb-100  ptb-sm-60">
            <div class="container">
                <div class="main-blog">
                    <div class="row">
                        @foreach($blogs as $value)
                        <!-- Single Blog Start -->
                        <div class="col-lg-6 col-sm-12">
                           <div class="single-latest-blog">
                               <div class="blog-img">
                                   <a href="{{route('user.blogDetail', $value->id)}}"><img src="{{ url('uploads') }}/{{$value->image}}" alt="blog-image"></a>
                               </div>
                               <div class="blog-desc">
                                   <h4><a href="{{route('user.blogDetail', $value->id)}}">{{$value->name}}</a></h4>
                                    <ul class="meta-box d-flex">
                                        <li><a href="#">By Truemart</a></li>
                                    </ul>
                                    <p>{{$value->content}}</p>
                                    <a class="readmore" href="{{route('user.blogDetail', $value->id)}}">Read More</a>
                               </div>
                               <div class="blog-date">
                                    <span>28</span>
                                    June
                                </div>
                           </div>
                        </div>
                        <!-- Single Blog End -->
                            @endforeach
                    </div>
                    <!-- Row End -->
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="pro-pagination">
                                    <ul class="blog-pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                    <div class="product-pagination">
                                        <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                                    </div>
                                </div>
                                <!-- Product Pagination Info -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Blog Page End Here -->

@endsection
