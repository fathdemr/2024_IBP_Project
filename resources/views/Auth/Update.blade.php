@extends('layouts.app')

@section('section')

<div class="d-flex justify-content-center align-items-center ">
  <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="POST" action="{{ url('update/'.$user->Id) }}">
                @csrf
                <div class="col-12">  
                  <label for="inputNanme4" class="form-label">First Name</label>
                  <input type="text" name="FirstName" class="form-control" id="inputNanme4" value="{{ $user->FirstName }}">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Last Name</label>
                  <input type="text" name="LastName" class="form-control" id="inputEmail4" value="{{ $user->LastName }}">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Email</label>
                  <input type="text" name="Email" class="form-control" id="inputAddress" value="{{ $user->Email }}">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" name="Password" class="form-control" id="inputPassword4">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Role" id="flexRadioDefault1" value="User" {{ $user->Type == 'User' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                      User
                    </label>
                  </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="Role" id="flexRadioDefault2" value="Admin" {{ $user->Type == 'Admin' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Admin
                    </label>
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

          

</div>
</div>


@endsection