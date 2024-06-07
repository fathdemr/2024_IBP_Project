@extends('layouts.app')

@section('section')

<div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admin Table</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <th scope="row">{{ $user->FirstName }}</th>
                    <td>{{ $user->LastName }}</td>
                    <td>{{ $user->Type }}</td>
                    <td>
                      <a href="{{ url('/sendmessage') }}" title="Send Message" class="btn btn-light btn-sm"><i class="ti ti-pencil"></i></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>


    </div>

@endsection