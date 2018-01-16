<!-- Tasks Menu -->
<li class="dropdown tasks-menu">
    <!-- Menu Toggle Button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-flag-o"></i>
        <span class="label label-danger" v-text="tasks ? tasks.length : '0'">0</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have <span v-text="tasks ? tasks.length : '0'"></span> open tasks</li>
        <li>
        <!-- Inner menu: contains the tasks -->
        <ul class="menu">
            <li v-for="task in tasks" :key="task.id"><!-- Task item -->
            <a :data-route-param="task.id" href="{{ Route::has(config('dashboard.tasks.routes.show')) ? Route(config('dashboard.tasks.routes.show')) : '#'}}">
                <!-- Task title and progress text -->
                <h3>
                    <span v-text="task.task"></span>
                    <small class="pull-right" v-text="task.complete + '%'"></small>
                </h3>
                <!-- The progress bar -->
                <div class="progress xs">
                <!-- Change the css width attribute to simulate progress -->
                <div class="progress-bar progress-bar-aqua" :style="{ width: task.complete + '%' }" role="progressbar"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only" v-text="task.complete + '% Complete'"></span>
                </div>
                </div>
            </a>
            </li>
            <!-- end task item -->
        </ul>
        </li>
        <li class="footer">
        <a href="{{ Route::has(config('dashboard.tasks.routes.show')) ? Route(config('dashboard.tasks.routes.show')) : '#'}}">View all tasks</a>
        </li>
    </ul>
</li>