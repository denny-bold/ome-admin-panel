@extends('layouts.app')

@section('content')
<h1>Settings</h1>
<form action="{{ route('settings.update') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>OME Server URL</label>
    <input name="ome_server_url" value="{{ $settings['url'] }}" class="form-control">
  </div>
  <div class="mb-3">
    <label>OME API Key</label>
    <input name="ome_api_key" value="{{ $settings['key'] }}" class="form-control">
  </div>
  <button class="btn btn-primary">Save</button>
</form>
@endsection
