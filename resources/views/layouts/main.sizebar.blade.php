@section('main.sidebar')
@foreach($list as $item)
    <li class="treeview">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="pages/layout/top-nav.html">
                    <i class="fa fa-circle-o"></i> Top Navigation</a>
            </li>
            <li>
                <a href="pages/layout/boxed.html">
                    <i class="fa fa-circle-o"></i> Boxed</a>
            </li>
            <li>
                <a href="pages/layout/fixed.html">
                    <i class="fa fa-circle-o"></i> Fixed</a>
            </li>
            <li>
                <a href="pages/layout/collapsed-sidebar.html">
                    <i class="fa fa-circle-o"></i> Collapsed Sidebar</a>
            </li>
        </ul>
    </li>
@endforeach
@endsection
