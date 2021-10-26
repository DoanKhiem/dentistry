@extends('user.layouts.master')

@section('title', 'about')


@section('main')
    <!-- Single Blog Page Start Here -->
    <div class="single-blog ptb-100  ptb-sm-60">
        <div class="container">
            <div class="row">
                <!-- Single Blog Sidebar Start -->
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside>
                        <div class="single-sidebar latest-pro mb-30">
                            <h3 class="sidebar-title">latest Posts</h3>
                            <ul class="sidbar-style">
                                <li><a href="shop.html">cameras</a></li>
                                <li><a href="shop.html">gamepad</a></li>
                                <li><a href="shop.html">digital cameras</a></li>
                                <li><a href="shop.html">virtual reality</a></li>
                            </ul>
                        </div>
                        <div class="col-img mb-30">
                            <a href="shop.html"><img src="img\banner\banner-sidebar.jpg" alt="slider-banner"></a>
                        </div>
                        <div class="single-sidebar mb-30">
                            <h3 class="sidebar-title">others</h3>
                            <ul class="sidbar-style">
                                <li><a href="login.html">Log in</a></li>
                                <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">Others link</a></li>
                            </ul>
                        </div>
                        <div class="tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidbar-style">
                                <ul class="tag-list">
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">Latest</a></li>
                                    <li><a href="#">Male</a></li>
                                    <li><a href="#">Female</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- Single Blog Sidebar End -->
                <!-- Single Blog Sidebar Description Start -->
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="single-sidebar-desc mb-all-40">
                        <div class="">
                            <img src="{{url('uploads')}}/{{$blog->image}}" alt="single-blog-img">
                        </div>
                        <div class="sidebar-post-content">
                            <h3 class="sidebar-lg-title">{{$blog->name}}</h3>
                            <ul class="post-meta d-sm-inline-flex">
                                <li><span>Posted</span> by Demo Posthemes</li>
                                <li><span> April 27TH, 2018</span></li>
                            </ul>
                        </div>
                        <div class="sidebar-desc mb-50">
                            <p>{{$blog->content}}</p>
                        </div>
                        <!-- Contact Email Area Start -->
                        <div class="blog-detail-contact">
                            <h3 class="mb-15 leave-reply">Bình luận</h3>
                            <div class="submit-review">
                                <form method="post">
                                    <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                    <div class="form-group">
                                        <label for="comment">Comment:</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <div class="sbumit-reveiew">
                                        <input value="Bình luận" class="return-customer-btn" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Contact Email Area End -->
                        <div class="container  mt-5">
                            <h3>Các bình luận</h3>
                            <div class="media mt-2">
                                <a class="mr-2 d-flex align-self-center" href="#">
                                    <img style="width: 50px"
                                        src="https://thumbs.dreamstime.com/b/male-avatar-icon-flat-style-male-user-icon-cartoon-man-avatar-hipster-vector-stock-91462914.jpg" alt="">
                                </a>
                                <div class="media-body">
                                    <h5>Tên user</h5>
                                    <p>Nội dung bình luận...</p>
                                </div>
                                <a href="">Trả lời</a>

                            </div>
                            <form method="post" style="display: none" class="mt-10">
                                <input type="hidden" value="" name="blog_id">
                                <div class="form-group">
                                    <label for="comment">Trả lời:</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <div class="sbumit-reveiew">
                                    <input value="Bình luận" class="return-customer-btn" type="submit">
                                </div>
                            </form>
                            <div class="media mt-2 ml-20" >
                                <a class="mr-2 d-flex align-self-center" href="#">
                                    <img style="width: 50px"
                                         src="https://thumbs.dreamstime.com/b/male-avatar-icon-flat-style-male-user-icon-cartoon-man-avatar-hipster-vector-stock-91462914.jpg" alt="">
                                </a>
                                <div class="media-body">
                                    <h5>Tên user</h5>
                                    <p>Nội dung bình luận...</p>
                                </div>
                                <a href="">Trả lời</a>

                            </div>
                            <form method="post" style="display: none" class="mt-10">
                                <input type="hidden" value="" name="blog_id">
                                <div class="form-group">
                                    <label for="comment">Trả lời:</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <div class="sbumit-reveiew">
                                    <input value="Bình luận" class="return-customer-btn" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Sidebar Description End -->
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Single Blog Page End Here -->


@endsection
