@extends('layouts.layout')

@section('content')
<div class="container mt-5" style="margin-bottom: 120px">
    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/" class="text-secondary text-decoration-none"
              >Products</a
            >
          </li>
          <li class="breadcrumb-item">
            <a href="#" class="text-secondary text-decoration-none"
              >{{$product->category->name ?? ''}}</a
            >
          </li>
          <li class="breadcrumb-item text-white" aria-current="page">
            Kaos Gombale
          </li>
        </ol>
      </nav>
      <div class="col-lg-6">
        <img src="{{asset('storage/'. $product->product_image)}}" alt="" class="img-fluid" />
      </div>
      <div class="col-lg-6">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @error('quantity')
          <div class="alert alert-danger mt-3">{{ $message }}</div>
        @enderror
        <h1>{{$product->name}}</h1>
        <h6>${{$product->price}}, 00</h6>
        <br />
        <h6>Quantity</h6>
        <div class="row mb-4">
          <div class="col-4 col-lg-4">
            <form action="/cart" method="POST">
              @csrf
              <div class="mb-3">
                <input type="text" class="form-control" name="quantity" />
                <input type="hidden" value="{{$product->id}}" name="product_id">
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-light text-center">Add to Cart</button>
              </div>
            </form>
          </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                Description
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                {{$product->description}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection