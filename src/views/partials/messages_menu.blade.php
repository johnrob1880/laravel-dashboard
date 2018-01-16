<li class="dropdown messages-menu">
    <!-- Menu toggle button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope-o"></i>
        <span class="label label-success" v-text="messages ? messages.length : '0'">0</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have <span v-text="notifications ? notifications.length : '0'">0</span> unread messages</li>
        <li>
        <!-- inner menu: contains the messages -->
        <ul class="menu">
            <li v-for="message in messages" :key="message.id"><!-- start message -->
                <a :data-route-param="message.id" href="{{ Route::has(config('dashboard.messages.routes.show')) ? Route(config('dashboard.messages.routes.show')) : '#'}}">
                    <div class="pull-left">
                    <!-- User Image -->
                    <img src="{{ asset('vendor/dashboard/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <!-- Message title and timestamp -->
                    <h4>
                    <span v-text="message.subject"></span>
                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <!-- The message -->
                    <p v-text="message.body"></p>
                </a>
            </li>
            <!-- end message -->
        </ul>
        <!-- /.menu -->
        </li>
        <li class="footer"><a href="{{ Route::has(config('dashboard.messages.routes.show')) ? Route(config('dashboard.messages.routes.show')) : '#'}}">See All Messages</a></li>
    </ul>
</li>