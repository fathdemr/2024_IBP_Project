@extends('layouts.app')

@section('section')

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

<div class="container">
<div class="row gutters">

<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
            <form action=" {{ url('myprofile/'.$user->Id) }}" method="POST">
                    @csrf
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="fullName">First Name</label>
                        <input type="text" name="FirstName" class="form-control" id="fullName" value="{{ $user->FirstName }} " readonly>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="eMail">Last Name</label>
                        <input type="email" name="LastName" class="form-control" id="eMail" value="{{ $user->LastName }}" readonly>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="phone">Email</label>
                        <input type="email" name="Email" class="form-control" id="phone" value="{{ $user->Email }}" readonly>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="website">Password</label>
                        <input type="password" name="Password" class="form-control" id="website" value="{{ $user->Password }}">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>  
                </div>
            </form>
		</div>
	</div>
</div>
</div>
</div>
</div>

@endsection