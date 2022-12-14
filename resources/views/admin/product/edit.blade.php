@extends('admin.layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="page-title mb-0 p-0">Table Product</h3>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/product">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit {{$item->name}}</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-md-6 col-4 align-self-center">
      <div class="text-end upgrade-btn">
        <a href="/admin/product"
          class="btn btn-success d-none d-md-inline-block text-white">Kembali</a>
      </div>
  </div>
</div>
<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-lg-12 col-xlg-9 col-md-7">
      <div class="card">
        <div class="card-body">
        <form method="post" action="/admin/product/{{ $item->id }}" id="myForm" enctype="multipart/form-data" class="form-horizontal form-material mx-2">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="col-md-12 mb-0" for="Name">Nama</label> 
                <div class="col-md-12">
                <input type="text" name="Name" class="form-control ps-0 form-control-line @error('name') is-invalid @enderror" id="Name" value="{{ $item->name }}" aria-describedby="Name" > 
              @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0" for="Category">Category</label> 
                <div class="col-md-12"> 
                <select name="Category" class="form-control ps-0 form-control-line @error('category') is-invalid @enderror">
                  @foreach($category as $ctg)
                  <option value="{{$ctg->id}}" {{$item->category_id == $ctg->id ? 'selected' : ''}} > {{$ctg->category}} </option>
                  @endforeach
                </select>
              @error('category')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0" for="Description">Deskripsi</label> 
                <div class="col-md-12">
                <input type="text" name="Description" class="form-control ps-0 form-control-line @error('description') is-invalid @enderror" id="Description" value="{{ $item->description }}" aria-describedby="Description" > 
                @error('description')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0" for="Price">Harga</label> 
                <div class="col-md-12">
                <input type="text" name="Price" class="form-control ps-0 form-control-line @error('price') is-invalid @enderror" id="Price" value="{{ $item->price }}" aria-describedby="Price" > 
              @error('price')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0" for="Stock">Stok</label> 
                <div class="col-md-12">
                <input type="text" name="Stock" class="form-control ps-0 form-control-line @error('stock') is-invalid @enderror" id="Stock" value="{{ $item->stock }}" aria-describedby="Stock" > 
              @error('stock')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0" for="Rating">Rating</label> 
                <div class="col-md-12">
                <input type="text" name="Rating" class="form-control ps-0 form-control-line @error('rating') is-invalid @enderror" id="Rating" value="{{ $item->rating }}" aria-describedby="Rating" > 
              @error('rating')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0" for="Image">Image</label> 
                <div class="col-md-12">
                <input type="file" name="image" class="form-control ps-0 form-control-line @error('image') is-invalid @enderror" id="Image" value="{{ $item->image }}" aria-describedby="Image" > 
                <img style="width:100%" src="{{ asset('assets/'. $item->image)}}" alt="">
              @error('image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection