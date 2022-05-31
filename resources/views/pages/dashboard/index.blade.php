@extends('pages.layouts.main')

@section('content')
<div class="row mb-1">
  <div class="col-md-12 mb-3">
    <a href="/" class="text-decoration-none float-end text-dark"><span class="fa fa-home me-1"></span> Home</a>
    <h5 class="float-start font-semibold">Dashboard</h5>
  </div>

  @include('pages.partials.sidebar')

  <div class="col-md-9 mb-3">
    <div class="card w-100 border-0 rad-10">
      <div class="card-body m-3">
        <h6 class="font-medium">Dahsboard</h6>
        <p class="top-5 color-grey fs-small text-grey font-regular">App / User / <span class="color-primary">Dashboard</span></p>
        
        <form action="/" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="pxZsPOmRjfoZq9nRfKe8ucPLBXfB3ukvalsnw6fr">            <input type="hidden" name="_method" value="PUT">
          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="email" class="fs-normal mb-1">Email : </label>
              <input type="email" name="email" class="form-control rad-6 fs-normal @error('email') is-invalid @enderror" placeholder="Email">
              @error('email')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="name" class="fs-normal mb-1">Full Name : </label>
              <input type="text" name="name" class="form-control rad-6 fs-normal @error('name') is-invalid @enderror" placeholder="Full Name">
              @error('name')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="phone_number" class="fs-normal mb-1">Phone Number : </label>
              <input type="text" name="phone_number" class="form-control rad-6 fs-normal @error('phone_number') is-invalid @enderror" placeholder="Phone Number">
              @error('phone_number')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="zip_code" class="fs-normal mb-1">Zip Code : </label>
              <input type="text" name="zip_code" class="form-control rad-6 fs-normal @error('zip_code') is-invalid @enderror" placeholder="Zip Code">
              @error('zip_code')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="gender" class="fs-normal mb-1 @error('gender') is-invalid @enderror">Gender : </label>
              <select name="gender" id="gender" class="form-control rad-6 fs-normal">
                <option value="1">Laki-laki</option>
                <option value="1">Perempuan</option>
                <option value="1">Hidden</option>
              </select>
              @error('gender')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="photo" class="fs-normal mb-1">Photo : </label>
              <input type="file" name="photo" class="form-control rad-6 fs-normal @error('photo') is-invalid @enderror" placeholder="Photo">
              @error('photo')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3">
            <label for="address" class="fs-normal mb-1">Address : </label>
            <input type="text" name="address" class="form-control rad-6 fs-normal @error('address') is-invalid @enderror" placeholder="Address">
            @error('address')
              <div class="invalid-feedback ml-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <button class="btn btn-primary fs-normal px-5 float-end py-2 rad-6">Update</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection