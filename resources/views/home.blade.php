@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div
      class="flex row align-items-center justify-content-center"
      style="height: 80vh"
    >
      <div class="col-lg-8">
        <h1 class="text-center fw-bold">Well-known Clothing Store in Town</h1>
        <h4 class="text-secondary text-center">
          Buy your drips and show to the streets
        </h4>
        <div>
          <div class="gap-5 text-center mt-4">
            <a href="" class="btn btn-light">Buy Now</a>
            <a href="" class="btn btn-dark">See More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="text-center">
      <h1 class="fw-bold">Categories</h1>
      <h5 class="text-secondary fw-light">
        Explore our categories and find the best products for you
      </h5>
    </div>
    <div class="row mt-5">
      @foreach ($categories as $category)
      <div class="col-lg-3 mb-5">
        <div
          class=""
          style="position: relative; text-align: center; color: white"
        >
          <img
            src="{{asset('assets/img/product.png')}}"
            alt="vinyl"
            class="img-fluid"
            style="border-radius: 5px; filter: brightness(50%)"
          />
          <h1
            class="fw-bold"
            style="
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            "
          >
            {{$category->name}}
          </h1>
        </div>
      </div>
      @endforeach
      {{-- <div class="col-lg-3 mb-5">
        <div
          class=""
          style="position: relative; text-align: center; color: white"
        >
          <img
            src="/assets/img/clothes.jpg"
            alt="vinyl"
            class="img-fluid"
            style="border-radius: 5px; filter: brightness(50%)"
          />
          <h1
            class="fw-bold"
            style="
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            "
          >
            Clothes
          </h1>
        </div>
      </div>
      <div class="col-lg-3 mb-5">
        <div
          class=""
          style="position: relative; text-align: center; color: white"
        >
          <img
            src="/assets/img/accessories.jpg"
            alt="vinyl"
            class="img-fluid"
            style="border-radius: 5px; filter: brightness(50%)"
          />
          <h1
            class="fw-bold"
            style="
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            "
          >
            Accessories
          </h1>
        </div>
      </div>
      <div class="col-lg-3 mb-5">
        <div
          class=""
          style="position: relative; text-align: center; color: white"
        >
          <img
            src="/assets/img/shoes.jpg"
            alt="vinyl"
            class="img-fluid"
            style="border-radius: 5px; filter: brightness(50%)"
          />
          <h1
            class="fw-bold"
            style="
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            "
          >
            Shoes
          </h1>
        </div>
      </div> --}}
    </div>
  </div>
  <div class="container mt-5">
    <div class="row mb-5">
      <h3 class="mb-4">Featured Products</h3>
      @foreach ($products as $product)
      <div class="col-lg-3 mb-4">
        <div class="card bg-transparent border-dark">
          <img src="{{asset("storage/". $product->product_image)}}" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title text-white">{{$product->name}}</h5>
            <h6 class="text-secondary">IDR {{$product->price}}, 00</h6>
            <div class="d-flex gap-3 mt-5">
              <div>
                <a href="/product/{{$product->id}}">
                  <h6 class="btn btn-dark">Preview</h6>
                </a>
              </div>
              <div>
                <h6 class="btn btn-light">Add To Cart</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection