@extends('pages.layouts.main')

@section('content')
<div class="row mb-1">
  <div class="col-md-12 mb-3">
    <a href="/" class="text-decoration-none float-end text-dark"><span class="fa fa-home me-1"></span> Home</a>
    <h5 class="float-start font-semibold">Change Password</h5>
  </div>

  @include('pages.partials.sidebar')

  <div class="col-md-9 mb-3">
    <div class="card w-100 border-0 rad-10">
      <div class="card-body m-3">
        <h6 class="font-medium">Change Password</h6>
        <p class="top-5 color-grey fs-small text-grey font-regular">App / User / <span class="color-primary">Change Password</span></p>
        
        <form action="/" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="pxZsPOmRjfoZq9nRfKe8ucPLBXfB3ukvalsnw6fr">            <input type="hidden" name="_method" value="PUT">
          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="email" class="fs-normal mb-1">Email : </label>
              <input type="email" readonly name="email" class="form-control rad-6 fs-normal" placeholder="Email">
            </div>
            <div class="col-md-6">
              <label for="name" class="fs-normal mb-1">Full Name : </label>
              <input type="text" readonly name="name" class="form-control rad-6 fs-normal" placeholder="Full Name">
            </div>
          </div>

          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="password" class="fs-normal mb-1">New Password : </label>
              <input type="password" name="password" class="form-control rad-6 fs-normal @error('password') is-invalid @enderror" placeholder="New Password">
              @error('password')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="password_confirmation" class="fs-normal mb-1">Confirm Password : </label>
              <input type="password" name="password_confirmation" class="form-control rad-6 fs-normal @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password">
              @error('password_confirmation')
                <div class="invalid-feedback ml-1">{{ $message }}</div>
              @enderror
            </div>
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