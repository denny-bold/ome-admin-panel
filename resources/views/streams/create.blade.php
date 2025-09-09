@extends('layouts.app')

@section('content')
<h1>Create Stream</h1>
<form action="{{ route('streams.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Name</label>
    <input name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Type</label>
    <select name="type" class="form-select">
      <option value="webrtc">WebRTC</option>
      <option value="rtmp">RTMP</option>
      <option value="srt">SRT</option>
      <!-- add others as needed -->
    </select>
  </div>
  <div class="mb-3">
    <label>Options (JSON)</label>
    <textarea name="options" class="form-control" rows="3"></textarea>
  </div>
  <button class="btn btn-primary">Create</button>
</form>
@endsection
