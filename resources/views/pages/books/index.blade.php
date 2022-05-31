@extends('pages.layouts.main')

@section('content')
<div class="row main">
    <div class="col-md-12">
      <h5 class="mb-3 font-semibold float-start mt-2">{{ $title = 'Books' }}</h5>
      <a href="#" data-bs-toggle="modal" data-bs-target="#filterModal" class="btn btn-primary text-white rad-8 fs-normal py-2 mb-3 text-decoration-none float-end px-3"><span class="fa fa-filter me-1"></span> Filter</a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="/book/1/show" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/atomic-habits.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Fikih Muamalah</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/harry-potter.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/life-30.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/ikigai.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="/book/1/show" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/atomic-habits.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Fikih Muamalah</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/harry-potter.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/life-30.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/ikigai.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="color-star float-start"><span class="fa fa-star me-2"></span> 5.00</span>
            <span class="float-end font-semibold">{{ 54000 / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

  </div>

  @include('pages.partials.filter')
@endsection