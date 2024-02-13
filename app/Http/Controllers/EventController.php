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
        $events = Event::all();
        return view('events', ['events' => $events]);
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

        return redirect('/events')->with('msg', 'Evento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::where('event_id', '=', $id)->first();
        return view('events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->except(['_token', '_method']);
        Event::where('event_id', '=', $id)->update($data);
        return redirect('/events')->with('msg', 'Evento editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::where('event_id', '=', $id)->delete();
        return redirect('/events')->with('msg', 'Evento excluído com sucesso!');
    }
}
