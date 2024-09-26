@extends('layout.navbar');

@section('content')

<section id="contact">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>Contact</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" aria-describedby="name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="email">
          </div>

          <div class="mb-3">
            <label for="text" class="form-label">Pesan</label>
            <textarea class="form-control" id="text" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1"
      d="M0,192L40,192C80,192,160,192,240,176C320,160,400,128,480,144C560,160,640,224,720,234.7C800,245,880,203,960,197.3C1040,192,1120,224,1200,224C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>

  @include('layout.footer')
</section>

@endsection