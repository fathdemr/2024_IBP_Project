@extends('layouts.app')

@section('section')

<div class="col-lg-12">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">User Table</h5>
    @if($_SESSION['User']->Type == 'Admin')
    <a href="{{ url('addproduct') }}" class="btn btn-primary float-end">Ekle</a>
    @endif
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
      @foreach($products as $product)
        <tr>
          <th scope="row">{{ $product->Id }}</th>
          <td><img src="{{ $product->ProductImage }}" style="height:45px; width: 45px "></td>
          <td>{{ $product->ProductName }}</td>
          <td>{{ $product->ProductPrice }}</td>
          <td>{{ $product->ProductCategory }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- End Default Table Example -->
  </div>
</div>


</div>

@endsection