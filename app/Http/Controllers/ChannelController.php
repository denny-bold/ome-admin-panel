<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Http\Requests\StoreChannelRequest;
use Illuminate\Support\Facades\Http;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();
        return view('channels.index', compact('channels'));
    }

    public function create()
    {
        return view('channels.create');
    }

    public function store(StoreChannelRequest $request)
    {
        Http::withToken(config('services.ome.key'))
            ->post(config('services.ome.url').'/channels', $request->validated());

        Channel::create($request->validated());
        return redirect()->route('channels.index');
    }

    public function edit(Channel $channel)
    {
        return view('channels.edit', compact('channel'));
    }

    public function update(StoreChannelRequest $request, Channel $channel)
    {
        Http::withToken(config('services.ome.key'))
            ->put(config('services.ome.url')."/channels/{$channel->id}", $request->validated());

        $channel->update($request->validated());
        return redirect()->route('channels.index');
    }

    public function destroy(Channel $channel)
    {
        Http::withToken(config('services.ome.key'))
            ->delete(config('services.ome.url')."/channels/{$channel->id}");

        $channel->delete();
        return back();
    }
}
