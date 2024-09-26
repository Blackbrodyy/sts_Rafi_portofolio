@extends("layout.navbar")

@section('content')

<section id="projects">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2>My Projects</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/p1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Ini adalah project blog pertama yang saya buat. Project ni dibuat untuk Penilaian Akhir
              Semester</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/p2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Setelah Membuat project blog, saya ditugaskan untuk membuat CRUD untuk penialain akhir
              semester 4</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/p3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Masih di Penilaian semester akhir, kali ini saya ditugaskan untuk membuat form komentar
              untuk pelajaran database.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1"
      d="M0,96L40,128C80,160,160,224,240,224C320,224,400,160,480,144C560,128,640,160,720,192C800,224,880,256,960,250.7C1040,245,1120,203,1200,176C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>
</section>

@endsection