<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{asset('assets/images/icon/logo.png')}}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="{{route('dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Bảng điều khiển</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('staff.index')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Quản lý nhân viên</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('doctor.index')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Quản lý bác sĩ</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('patient.index')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Quản lý bệnh nhân</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('appointment.index')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Quản lý cuộc hẹn</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('service.index')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Dịch vụ</span></a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Báo cáo, thống kê</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
