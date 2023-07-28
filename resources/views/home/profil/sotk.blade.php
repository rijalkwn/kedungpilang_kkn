@extends('home.layout.master')
@section('content')
    <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Struktur Organisasi</h2>
            </div>
            {{-- gambar --}}
            <div class="row my-4">
                <img src="/assets/img/logo.png" alt="">
            </div>
            <div class="section-title">
                <h2>Perangkat Desa</h2>
            </div>

            <div class="row">
                @foreach ($perangkat as $perangkat)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mb-4">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="/image/{{ $perangkat->image }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $perangkat->nama }}</h4>
                                <h6>{{ $perangkat->jabatan }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Doctors Section -->
@endsection
