@extends('layouts.app')

@section('content')
<h1>Edit channels</h1>
<form action="{{ route('channelss.update', $channels) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3">
    <label>Name</label>
    <input name="name" value="{{ $channels->name }}" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>kind</label>
    <input name="kind" value="{{ $channels->kind }}" class="form-control">
  </div>
  <div class="mb-3">
    <label>config (JSON)</label>
    <textarea name="config" class="form-control" rows="3">{{ json_encode($channels->config) }}</textarea>
  </div>
  <button class="btn btn-primary">Update</button>
</form>
@endsection
