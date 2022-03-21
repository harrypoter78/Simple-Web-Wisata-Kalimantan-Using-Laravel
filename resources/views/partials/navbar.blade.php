{{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top   "> --}}
  <nav class="navbar navbar-expand-lg navbar-dark   ">
    <div class="container border-bottom">
      <a class="navbar-brand" style="font-size: 60; height: bold;" href="/">TRAVEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end text-white" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active  {{ ($title === "Beranda")}}" style="font-size: 24; height: bold;" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active  {{ ($title === "Tentang")}} "style="font-size: 24; height: bold;" href="/about">Tentang</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link  active {{ ($title === "Kontak")}}" style="font-size: 24; height: bold;"href="/posts">Kontak</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link active  {{ ($title === "Wisata")}}" style="font-size: 24; height: bold;"href="/categories">Wisata</a>
          </li>

          {{-- <div class="btn-group">
            <button type="button" class="btn light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              Wisata
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li><button class="dropdown-item" type="button">Kota</button></li>
              <li><button class="dropdown-item" type="button">Alam</button></li>
            </ul>
          </div> --}}

          <div class ="" style="padding-left: 50">
          <button type="button" class="btn btn-outline-light "style="font-size: 24; height:bold;" href="/login">Masuk</button>
          </div>
        </ul>
      </div>
    </div>
  </nav>
