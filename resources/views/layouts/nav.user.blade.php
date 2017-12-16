@section('nav.user')
<!-- User Account -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="#avatar_link" class="user-image" alt="User Avatar">
        <span class="hidden-xs">Họ Và Tên - Users.name</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User Avatar -->
        <li class="user-header">
            <img src="#avatar_link" class="img-circle" alt="User Avatar">

            <p>Họ Và Tên - Users.name
                <small>Chức vụ - Positions.title</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <p>Email: Users.email</p>
            <p>Phone: Users.phone</p>
            <p>Location: Teams.location </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>
@endsection