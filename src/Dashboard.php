<?php

namespace Johnrob1880\Dashboard;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Dashboard 
{
    public function themeClassnames() 
    {
        $skin = Config::get('dashboard.skin', 'blue');
        $layout = Config::get('dashboard.layout', 'sidebar-mini');

        return sprintf('hold-transition skin-%s %s', $skin, $layout);
    }

    public function skinUrl() 
    {
        $skin = Config::get('dashboard.skin', 'blue');
        
        return sprintf('/vendor/dashboard/css/skins/skin-%s.min.css', $skin);
    }

    public function env($env) 
    {
        return App::environment($env);
    }

    public function scripts($bucket) {
        $scripts = Config::get('dashboard.scripts.' . $bucket);
        foreach ($scripts as $script) {
            echo sprintf('<script src="%s"></script>', asset($script));
        }
    }
}