<!-- Notifications Menu -->
<li class="dropdown notifications-menu">
    <!-- Menu toggle button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning" v-text="notifications ? notifications.length : '0'">0</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have <span v-text="notifications ? notifications.length : '0'"></span> new notifications</li>
        <li v-if="notifications">
        <!-- Inner Menu: contains the notifications -->
        <ul class="menu">
            <li v-for="notification in notifications" :key="notification.id"><!-- start notification -->
            <a :data-route-param="notification.id" href="{{ Route::has(config('dashboard.notifications.routes.show')) ? Route(config('dashboard.notifications.routes.show')) : '#'}}">
                <i class="fa fa-users text-aqua"></i> <span v-text="notification.{{ config('dashboard.notifications.message_field') }}"></span>
                <span class="close" @click.stop.prevent="removeNotification(notification.id)">&times;</span>
            </a>
            </li>
            <!-- end notification -->
        </ul>
        </li>
        <li class="footer"><a href="{{ Route::has(config('dashboard.notifications.routes.show')) ? Route(config('dashboard.notifications.routes.show')) : '#'}}">View all</a></li>
    </ul>
</li>