<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
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
     * @param Event $event
     * @return Response
     */
    public function show(Event $event): Response
    {
        return Inertia::render('Events/Show', [
            'event' => $event,
        ]);
    }

    /**
     * @param Event $event
     * @return Response
     */
    public function edit(Event $event): Response
    {
        return Inertia::render('Events/Edit', [
            'event' => $event,
        ]);
    }

    /**
     * @param StoreEventRequest $request
     * @return RedirectResponse
     */
    public function store(StoreEventRequest $request): RedirectResponse
    {
        Event::create([
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return Redirect::route('events.index')
            ->with('success', 'Event created!');
    }


    /**
     * @param UpdateEventRequest $request
     * @param Event              $event
     * @return RedirectResponse
     */
    public function update(UpdateEventRequest $request, Event $event): RedirectResponse
    {
        $event->update([
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return Redirect::route('events.index')
            ->with('success', 'Event updated!');
    }

    /**
     * @param Event $event
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Event $event): RedirectResponse
    {
        $event->delete();

        return Redirect::route('events.index')
            ->with('success', 'Event deleted!');
    }
}
