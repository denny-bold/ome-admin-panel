<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit()
    {
        $settings = config('services.ome');
        return view('settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        // Persist to env or DB as you prefer
        // For simplicity: write .env values (requires write permissions)
        $this->writeEnv([
            'OME_SERVER_URL' => $request->ome_server_url,
            'OME_API_KEY'    => $request->ome_api_key,
        ]);

        return back()->with('status', 'Settings updated.');
    }

    protected function writeEnv(array $data)
    {
        $path = base_path('.env');
        $env = collect(explode("\n", file_get_contents($path)))
            ->map(fn($line) => explode('=', $line, 2))
            ->map(function($pair) use ($data) {
                if (isset($data[$pair[0]])) {
                    return "{$pair[0]}={$data[$pair[0]]}";
                }
                return implode('=', $pair);
            })->join("\n");
        file_put_contents($path, $env);
    }
}
