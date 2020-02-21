<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Events/Index', [
            'testData' => [
                1, 2, 3,
            ],
        ]);
    }
}
