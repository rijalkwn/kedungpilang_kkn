@extends('home.layout.master')

@section('content')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>UMKM Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($umkm as $umkmItem)
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-4 mb-lg-0 mt-4">
                        <a href="/umkm{{ $umkmItem->id }}" style="text-decoration: none; color: inherit;">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="member-img d-flex justify-content-center align-items-center">
                                    <img src="/image/{{ $umkmItem->image }}" alt="" class="img-fluid"
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
            {{-- <div class="row mt-4">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $currentPage == 1 ? '#' : '?page=' . ($currentPage - 1) }}"
                                tabindex="-1" aria-disabled="{{ $currentPage == 1 ? 'true' : 'false' }}">Previous</a>
                        </li>
                        <li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
                            <a class="page-link"
                                href="{{ $currentPage == $lastPage ? '#' : '?page=' . ($currentPage + 1) }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div> --}}
        </div>
    </section><!-- End Featured Services Section -->
@endsection
