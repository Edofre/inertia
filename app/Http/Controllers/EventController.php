<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index(): Response
    {
        return Inertia::render('Events/Index', [
            'events' => Event::all(),
        ]);
    }

    /**
     * @return \Inertia\Response
     */
    public function create(): Response
    {
        return Inertia::render('Events/Create', [
        ]);
    }

    /**
     * @param StoreEventRequest $request
     * @return RedirectResponse
     */
    public function store(StoreEventRequest $request): RedirectResponse
    {
        // Notify user
        Event::create([
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return Redirect::route('events.index')
            ->with('success', 'Event created!');
    }
}
