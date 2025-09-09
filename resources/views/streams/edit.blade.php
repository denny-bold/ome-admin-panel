@extends('layouts.app')

@section('content')
<h1>Edit Stream</h1>
<form action="{{ route('streams.update', $stream) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3">
    <label>Name</label>
    <input name="name" value="{{ $stream->name }}" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Type</label>
    <input name="type" value="{{ $stream->type }}" class="form-control">
  </div>
  <div class="mb-3">
    <label>Options (JSON)</label>
    <textarea name="options" class="form-control" rows="3">{{ json_encode($stream->options) }}</textarea>
  </div>
  <button class="btn btn-primary">Update</button>
</form>
@endsection
