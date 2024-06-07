@extends('layouts.app')

@section('section')
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-center align-items-center ">
  <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Product Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="POST" action="{{ url('/addproduct') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12">  
                  <label for="inputNanme4" class="form-label">Product Name</label>
                  <input type="text" name="ProductName" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Product Price</label>
                  <input type="text" name="ProductPrice" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Product Image</label>
                  <input type="file" name="ProductImage" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Product Category</label>
                  <input type="text" name="ProductCategory" class="form-control" id="inputPassword4">
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