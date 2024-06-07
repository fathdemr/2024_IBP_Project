@extends('layouts.app')

@section('section')

@foreach ($messages as $message)

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Message</th>
      <th scope="col">Atılma Tarihi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $message->Name }}</th>
      <td>{{ $message->Title }}</td>
      <td>{{ $message->Message }}</td>
      <td>{{ $message->Created_at }}</td>
    </tr>
  </tbody>
</table>

@endforeach

@endsection