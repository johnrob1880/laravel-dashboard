<li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<li><a href="{{ Route::has(config('dashboard.notifications.routes.show')) ? Route(config('dashboard.notifications.routes.show')) : '#'}}"><i class="fa fa-comment-o"></i> <span>Notifications</span></a></li>
<li class="treeview">
    <a href="{{ Route::has(config('dashboard.messages.routes.show')) ? Route(config('dashboard.messages.routes.show')) : '#'}}"><i class="fa fa-envelope-o"></i> <span>Messages</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ Route::has(config('dashboard.messages.routes.show')) ? Route(config('dashboard.messages.routes.show')) : '#'}}">Inbox</a></li>
    </ul>
</li>
<li><a href="{{ Route::has(config('dashboard.tasks.routes.show')) ? Route(config('dashboard.tasks.routes.show')) : '#'}}"><i class="fa fa-tasks"></i> <span>Tasks</span></a></li>