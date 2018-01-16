<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">{{ Config::get('app.name-alt', '') }}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{{ Config::get('app.name') }}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            @if (config('dashboard.messages.supported', false))
                @include('dashboard::partials.messages_menu')
            @endif

            @if (config('dashboard.notifications.supported', false))
                @include('dashboard::partials.notifications_menu')
            @endif

            @if (config('dashboard.tasks.supported', false))
                @include('dashboard::partials.tasks_menu')
            @endif

            @if (Auth::check())
                @include('dashboard::partials.user_menu')            
            @endif
            <!-- Control Sidebar Toggle Button -->
            <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
        </div>
    </nav>
</header>