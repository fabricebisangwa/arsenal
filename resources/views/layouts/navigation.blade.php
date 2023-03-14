<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    HRMS
                </a>
            </div>

            <ul class="nav">
                <li @class(['active'=> Request::is('/')])>
                    <a href="/">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li  class="{{Request::is('user')?'active':''}}">
                    <a href="/user">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="{{Request::is('job_insert')?'active':''}}">
                    <a href="/job_insert">
                        <i class="ti-view-list-alt"></i>
                        <p>Job titles</p>
                    </a>
                </li>
                <li class="{{Request::is('department')?'active':''}}">
                    <a href="/department">
                        <i class="fas fa-building-user"></i>
                        <p>Department</p>
                    </a>
                </li>
                <li class="{{Request::is('employee')?'active':''}}">
                    <a href="/employee">
                        <i class="fas fa-user-tie"></i>
                        <p>Employee</p>
                    </a>
                </li>
                <!--<li class="{{Request::is('maps')?'active':''}}">
                    <a href="/maps">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="/notifications">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>-->
            </ul>
    	</div>
    </div>
