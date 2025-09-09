@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h1>channelss</h1>
  <a href="{{ route('channelss.create') }}" class="btn btn-primary">New channels</a>
</div>

<table class="table table-striped">
  <thead><tr><th>Name</th><th>kind</th><th>Actions</th></tr></thead>
  <tbody>
    @foreach($channelss as $s)
    <tr>
      <td>{{ $s->name }}</td>
      <td>{{ $s->kind }}</td>
      <td>
        <a href="{{ route('channelss.edit', $s) }}" class="btn btn-sm btn-secondary">Edit</a>
        <form action="{{ route('channelss.destroy', $s) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
