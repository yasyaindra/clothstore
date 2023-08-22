<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Clothestore</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset("/assets/styles/style.css")}}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container">
        <div>
          <a class="navbar-brand text-white fw-bold" href="/">Clothestore</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            @foreach ($categories as $cat)
            <li class="nav-item">
              <a class="nav-link text-white" href="#">{{$cat->name}}</a>
            </li>
            @endforeach
          </ul>
        </div>
        <div>
          <form class="d-flex text-white" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-dark border-0 text-white" type="submit">
              Search
            </button>
          </form>
        </div>
        <div class="row align-items-center gap-3">
          <div class="col-2 p-3">
            <a
              class="text-white"
              data-bs-toggle="offcanvas"
              href="#offcanvasExample"
              role="button"
              aria-controls="offcanvasExample"
            >
              <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </div>
          <div class="col-2">
            <span>
              {{{ $transactions_count }}}
            </span>
          </div>
        </div>
      </div>
    </nav>
    @if (session('success'))
    <div class="bg-success" role="alert">
      <div class="container">
        {{ session('success') }}
      </div>
    </div>
    @endif
    {{-- Main Content --}}
    @yield('content')
    {{-- End Main --}}
    <div
      class="offcanvas offcanvas-end bg-dark text-white"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cart ({{$transactions_count}})</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div>
          @foreach ($transactions as $transaction)
          <div class="row mb-4 justify-content-between">
            <div class="col-3 col-lg-3">
              <img
                src="/assets/img/image.webp"
                class="img-fluid rounded"
                alt=""
              />
            </div>
            <div class="col col-lg-5 text-end">
              <h5>{{$transaction->product->first()->name ?? "Kosong"}}</h5>
              <span>${{$transaction->product->first()->price ?? 0}} x {{$transaction->quantity}} = ${{$transaction->total}}</span>
            </div>
            <div class="col-lg-12 mt-3">
              <div class="row justify-content-start">
                <div class="col-2 col-lg-2">
                  <a href="" class="btn btn-light"><i class="fa-solid fa-minus"></i></a>
                </div>
                <div class="col-2 col-lg-2">
                  <input type="text" value="{{$transaction->quantity}}" class="form-control" >
                </div>
                <div class="col-2 col-lg-2">
                  <a href="" class="btn btn-light"><i class="fa-solid fa-plus"></i></a>
                </div>
                <div class="col-2 col-lg-2">
                  <form action="/cart/{{$transaction->id}}" method="POST" class="d-inline">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-danger">
                      <i class="fa-solid fa-trash"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div>
          <div class="row">
            <div class="col col-lg">
              <p>Subtotal</p>
            </div>
            <div class="col-5 col-lg-5 text-end">
              <p>${{$subtotal}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg">
              <p>Shipping</p>
            </div>
            <div class="col-5 col-lg-5 text-end">
              <p>Free</p>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg">
              <p>Taxes</p>
            </div>
            <div class="col-5 col-lg-5 text-end">
              <p>Calculated at checkout</p>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg">
              <p>Total</p>
            </div>
            <div class="col-5 col-lg-5 text-end">
              <p>${{$subtotal}}</p>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <a href="/order" class="col-lg btn-light btn">Procced To Buy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <span class="fw-bold">Distrofy</span>
            <p>
              by
              <a
                href="https://yasya.tech"
                class="text-decoration-none text-secondary"
              >
                Yasya Technology
              </a>
            </p>
          </div>
          <div class="col-6 col-lg-2">
            <h5 class="mb-3">Help</h5>
            <ul class="list-unstyled">
              <li class="footer-list">
                <a href="" class="text-decoration-none text-secondary">About</a>
              </li>
              <li class="footer-list">
                <a href="" class="text-decoration-none text-secondary"
                  >Contact</a
                >
              </li>
              <li class="footer-list">
                <a href="" class="text-decoration-none text-secondary">Terms</a>
              </li>
              <li class="footer-list">
                <a href="" class="text-decoration-none text-secondary"
                  >Privacy</a
                >
              </li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h5 class="mb-3">Social</h5>
            <ul class="list-unstyled">
              <li class="footer-list">
                <a href="" class="text-decoration-none text-secondary"
                  >Twitter</a
                >
              </li>
              <li class="footer-list">
                <a href="" class="text-decoration-none text-secondary"
                  >Github</a
                >
              </li>
              <li class="footer-list">
                <a href="" class="text-decoration-none text-secondary"
                  >Discord</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <script
      src="https://kit.fontawesome.com/4c03683015.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
