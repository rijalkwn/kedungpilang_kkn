@extends('home.layout.master')

@section('content')
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">
            <div class="section-title" style="margin-top: 70px">
                <h2>UMKM Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($umkm as $umkm)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <img src="/image/{{ $umkm->image }}" alt="" class="img-fluid" width="100">
                        <h4>{{ $umkm->title }}</h4>
                        <p>{{ $umkm->description }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
