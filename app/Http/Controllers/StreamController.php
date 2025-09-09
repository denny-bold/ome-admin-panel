<?php

namespace App\Http\Controllers;

use App\Models\Stream;
use App\Http\Requests\StoreStreamRequest;
use Illuminate\Support\Facades\Http;

class StreamController extends Controller
{
    public function index()
    {
        $streams = Stream::all();
        return view('streams.index', compact('streams'));
    }

    public function create()
    {
        return view('streams.create');
    }

    public function store(StoreStreamRequest $request)
    {
        // send to OME API
        Http::withToken(config('services.ome.key'))
            ->post(config('services.ome.url').'/streams', $request->validated());

        Stream::create($request->validated());
        return redirect()->route('streams.index');
    }

    public function edit(Stream $stream)
    {
        return view('streams.edit', compact('stream'));
    }

    public function update(StoreStreamRequest $request, Stream $stream)
    {
        Http::withToken(config('services.ome.key'))
            ->put(config('services.ome.url')."/streams/{$stream->id}", $request->validated());

        $stream->update($request->validated());
        return redirect()->route('streams.index');
    }

    public function destroy(Stream $stream)
    {
        Http::withToken(config('services.ome.key'))
            ->delete(config('services.ome.url')."/streams/{$stream->id}");

        $stream->delete();
        return back();
    }
}
