<?php

namespace Johnrob1880\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DashboardNotificationsController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $middleware = config('dashboard.middleware', []);
        if (count($middleware))
        {
            $this->middleware($middleware);
        }
    }

    public function show($id = null)
    {
        if ($id) {
            return view('dashboard::notifications.show', [
                'notification' => [
                    'id' => $id,
                    'message' => 'fake'
                ]
            ]);
        }

        return view('dashboard::notifications.show_all');
    }
}
