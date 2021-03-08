<!-- -------------- Sidebar - Author -------------- -->
<div class="sidebar-widget author-widget">
    <div class="media">
        <a href="/profile" class="media-left">
            @if(Auth::user()->employee->photo)
                <img src="{{Auth::user()->employee->photo}}" width="40px" height="30px" class="img-responsive">
            @else
                <img src="{{ URL::asset('assets/img/avatars/profile_pic.png') }}" class="img-responsive">
            @endif

        </a>

        <div class="media-body">
            <div class="media-author"><a href="/profile">{{Auth::user()->name}}</a></div>
        </div>
    </div>
</div>

<!-- -------------- Sidebar Menu  -------------- -->
<ul class="nav sidebar-menu scrollable">
    <li class="active">
        <a class="accordion-toggle menu-open" href="/dashboard">
            <span class="fa fa-dashboard"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>
    @if(Auth::user()->isHR())
        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Employees</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="{{route('add-employee')}}">
                        <span class="glyphicon glyphicon-tags"></span> Add Employee </a>
                </li>
                <li>
                    <a href="{{route('employee-manager')}}">
                        <span class="glyphicon glyphicon-tags"></span> Employee Listing </a>
                </li>
                <li>
                    <a href="{{route('upload-emp')}}">
                        <span class="glyphicon glyphicon-tags"></span> Upload </a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Notification</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="{{route('message')}}">
                        <span class="glyphicon glyphicon-tags"></span> Add Employee </a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa fa-laptop"></span>
                <span class="sidebar-title">Assets</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="{{route('add-asset')}}">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Add Asset </a>
                </li>
                <li>
                    <a href="{{route('asset-listing')}}">
                        <span class="glyphicon glyphicon-calendar"></span> Asset Listings </a>
                </li>
                <li>
                    <a href="{{route('assign-asset')}}">
                        <span class="fa fa-desktop"></span> Assign Asset </a>
                </li>
                <li>
                    <a href="{{route('assignment-listing')}}">
                        <span class="fa fa-clipboard"></span> Assignment Listings </a>
                </li>
            </ul>
        </li>
    @endif
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-envelope"></span>
            <span class="sidebar-title">Leaves</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('apply-leave')}}">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Apply Leave </a>
            </li>
            <li>
                <a href="{{route('my-leave-list')}}">
                    <span class="glyphicon glyphicon-calendar"></span> My Leave List </a>
            </li>

            @if(\Auth::user()->isHR())
                <li>
                    <a href="{{route('add-leave-type')}}">
                        <span class="fa fa-desktop"></span> Add Leave Type </a>
                </li>
                <li>
                    <a href="{{route('leave-type-listing')}}">
                        <span class="fa fa-clipboard"></span> Leave Type Listings </a>
                </li>
            @endif
            @if(Auth::user()->isHR() || Auth::user()->isCoordinator())
                <li>
                    <a href="{{route('total-leave-list')}}">
                        <span class="fa fa-clipboard"></span> Total Leave Listings </a>
                </li>
            @endif
            
        </ul>
    </li>

    {{--<li class="sidebar-label pt30"> Extras</li>--}}
<!-- -------------- /Sidebar Menu  -------------- -->