@extends('home.layout.master')


@section('content')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>Data Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($data as $data)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon">
                                <img src="/image/{{ $data->image }}" alt="" class="img-fluid" width="80">
                            </div>
                            <h4>{{ $data->title }}</h4>
                            <p class="description">{{ $data->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Featured Services Section -->
@endsection
