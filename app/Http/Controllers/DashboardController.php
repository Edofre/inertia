<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Dashboard/Index', [
            'url_events_index' => route('events.index'),
        ]);
    }
}
