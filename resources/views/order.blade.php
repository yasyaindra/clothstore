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
    <!-- Main Content -->
    <div class="container mb-5">
      <h1 class="text-center mt-4 mb-4">Checkout</h1>
      <div class="row">
        <div class="col-6">
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <div class="card bg-transparent text-white border-dark">
            <div class="card-body">
              <form method="POST" action="/order">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nama Penerima</label>
                  <input type="text" class="form-control" placeholder="John" name="name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Nomor Hape</label>
                  <input type="text" class="form-control" placeholder="+62" name="phone_number" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Alamat Lengkap</label>
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a comment here" name="address"
                    ></textarea>
                    <label for="floatingTextarea">Alamat</label>
                  </div>
                </div>
                <!-- Provinsi -->
                <div class="mb-3">
                  <div class="form-label">Provinsi</div>
                  <select
                    class="form-select"
                    aria-label="Default select example" name="province"
                  >
                    <option selected>--Provinsi--</option>
                    <option value="Banten">Banten</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                  </select>
                </div>
                <!-- Kab/Kota -->
                <div class="mb-3">
                  <div class="form-label">Kota/Kabupaten</div>
                  <select
                    class="form-select"
                    aria-label="Default select example" name="city"
                  >
                    <option selected>--Kota/Kab--</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Solo">Solo</option>
                    <option value="Jakarta">Jakarta</option>
                  </select>
                </div>
                <!-- Kec -->
                <div class="mb-3">
                  <div class="form-label">Kecamatan</div>
                  <select
                    class="form-select"
                    aria-label="Default select example" name="district"
                  >
                    <option selected>--Kecamatan--</option>
                    <option value="Rajeg">Rajeg</option>
                    <option value="Karanganyar">Karanganyar</option>
                    <option value="Bulungan">Bulungan</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-light">Bayar</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card bg-transparent text-white border-dark">
            <h4 class="p-3 pb-4">Informasi Order</h4>
            @foreach ($transactions as $transaction)
            <div class="row justify-content-between align-items-center mb-3">
              <div class="col-lg-4">
                <h5 class="px-3">{{$transaction->product->first()->name}}</h5>
                <span class="text-white px-3">{{$transaction->quantity}} Items</span>
              </div>
              <div class="col-lg-4 text-end">
                <h5 class="px-3 text-success">${{$transaction->total}}</h5>
              </div>
            </div>
            @endforeach
            <hr />
            <div class="row justify-content-between align-items-center mb-3">
              <div class="col-lg-4">
                <h5 class="px-3">Total Harga</h5>
              </div>
              <div class="col-lg-4 text-end">
                <h5 class="px-3 text-primary">${{$subtotal}}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Content -->
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
