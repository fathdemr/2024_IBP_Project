@extends('layouts.app')

@section('section')
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
    <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User Table</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <th scope="row">{{ $user->Id }}</th>
                    <td>{{ $user->FirstName }}</td>
                    <td>{{ $user->LastName }}</td>
                    <td>{{ $user->Type }}</td>
                    <td>
                      <a href="{{ url('update/'.$user->Id) }}" title="Update Informations" class="btn btn-primary btn-sm"><i class="ti ti-upload"></i></a>
                      <a href="{{ url('delete/'.$user->Id) }}" title="Remove User" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Message Table</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                  <tr>
                    <th scope="row">{{ $message->Name }}</th>
                    <td>{{ $message->Title }}</td>
                    <td>{{ $message->Message }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>


    </div>
@endsection

