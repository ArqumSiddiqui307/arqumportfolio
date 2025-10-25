@extends('layout.apptheme')
@section('content')

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-content">
      <h1>Arqum Siddiqui</h1>
      <p>
        To be an active employee in your company and utilize my versatile skills.
        I aim to leverage knowledge of Software Engineering to uplift the organization
        through hard work, loyalty, and collaboration, delivering the best results.
      </p>

      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="mailto:arqumsiddiqui14@gmail.com" class="btn btn-custom">
          <i class="fa-solid fa-envelope"></i> Contact Me
        </a>

        <a href="{{ asset('Documents/Arqum_Siddiqui_CV.pdf') }}" 
          class="btn btn-custom" download>
          <i class="fa-solid fa-download"></i> Download CV
        </a>
      </div>
    </div>
  </section>

  <!-- INFO SECTION -->
  <section class="info-section">
    <!-- LEFT COLUMN (Contact) -->
    <div class="info-column">
      <div class="info-box">
        <h5>Name</h5>
        <p>Arqum Siddiqui</p>
      </div>
      <div class="info-box">
        <h5>Phone</h5>
        <p>+92 308 2575413</p>
      </div>
    </div>

    <!-- RIGHT COLUMN (General Info) -->
    <div class="info-column">
      <div class="info-box">
        <h5>Location</h5>
        <p>Karachi, Pakistan</p>
      </div>
      <div class="info-box">
        <h5>Email</h5>
        <p>arqumsiddiqui14@gmail.com</p>
      </div>
      {{-- <div class="info-box">
        <h5>Date of Birth</h5>
        <p>May 10, 1994</p>
      </div> --}}
    </div>
  </section>

@endsection
