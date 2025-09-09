@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h1>Streams</h1>
  <a href="{{ route('streams.create') }}" class="btn btn-primary">New Stream</a>
</div>

<table class="table table-striped">
  <thead><tr><th>Name</th><th>Type</th><th>Actions</th></tr></thead>
  <tbody>
    @foreach($streams as $s)
    <tr>
      <td>{{ $s->name }}</td>
      <td>{{ $s->type }}</td>
      <td>
        <a href="{{ route('streams.edit', $s) }}" class="btn btn-sm btn-secondary">Edit</a>
        <form action="{{ route('streams.destroy', $s) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
