<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Distrofy</title>
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
          <a class="navbar-brand text-white fw-bold" href="/">Distrofy</a>
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
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Clothes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Vinyl</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Shoes</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Accessories</a>
            </li>
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
        <div class="p-3">
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
        <div>9</div>
      </div>
    </nav>
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
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cart (9)</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <div>
          <div class="row mb-4">
            <div class="col-3 col-lg-3">
              <img
                src="/assets/img/image.webp"
                class="img-fluid rounded"
                alt=""
              />
            </div>
            <div class="col col-lg">
              <h5>Item 1</h5>
              <span>$100 x 1 = $100</span>
              <span>Skateboards / Wheels</span>
            </div>
            <div class="col-lg-12 mt-3">
              <a href="" class="btn btn-light">-</a>
              <span>10</span>
              <a href="" class="btn btn-light">+</a>
              <a href="" class="btn btn-danger"
                ><i class="fa-solid fa-trash"></i
              ></a>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col col-lg">
              <p>Subtotal</p>
            </div>
            <div class="col-5 col-lg-5 text-end">
              <p>$100</p>
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
              <p>$100000</p>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <a href="" class="col-lg btn-light btn">Procced To Buy</a>
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
