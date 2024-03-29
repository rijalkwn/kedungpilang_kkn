@extends('home.layout.master')

@section('content')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>Event Terbaru Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($event as $event)
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="/image/{{ $event->image }}" alt="" class="img-fluid">
                            </div>
                            <br>
                            <div class="text-center">
                                <h4>{{ $event->title }}</h4>
                            </div>
                            <p class="description">{{ $event->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Featured Services Section -->
@endsection
