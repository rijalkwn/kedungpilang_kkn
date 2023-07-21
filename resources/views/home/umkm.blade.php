@extends('home.layout.master')

@section('content')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>UMKM Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($umkm as $umkmItem)
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <a href="/umkm{{ $umkmItem->id }}" style="text-decoration: none; color: inherit;">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="member-img">
                                    <img src="/image/{{ $umkmItem->image }}" alt="" class=""
                                        style="width: 300px; height: 200px; object-fit: cover;">
                                </div>
                                <br>
                                <div class="text-center">
                                    <h4>{{ Str::words($umkmItem->title, 6, '...') }}</h4>
                                </div>
                                <p class="description">{{ Str::words($umkmItem->description, 8, '...') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- <div class="text-center mt-4">
                {{ $umkm->links() }}
            </div> --}}
        </div>
    </section><!-- End Featured Services Section -->
@endsection
