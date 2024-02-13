<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event;

        $event->event_title = $request->title;
        $event->client_id = $request->client_id;
        $event->event_description = $request->description;
        $event->event_local = $request->local;
        $event->event_date = $request->date;
        $event->event_hour = $request->hour;
        $event->event_classification = $request->classification;
        $event->event_social_media_link = $request->social_media_link;
        $event->event_date_sale_ticket = $request->date_sale_ticket;

        $event->save();

        return redirect('/events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
