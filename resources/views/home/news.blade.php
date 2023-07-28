@extends('home.layout.master')

@section('content')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>Berita Terbaru Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($news as $newsItem)
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-4 mb-lg-0 mt-4">
                        <a href="/berita{{ $newsItem->id }}" style="text-decoration: none; color: inherit;">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="member-img">
                                    <img src="/image/{{ $newsItem->image }}" alt="" class=""
                                        style="width: 300px; height: 200px; object-fit: cover;">
                                </div>
                                <br>
                                <div class="text" style="align-items: justify">
                                    <h6>{{ Str::words($newsItem->title, 8, '...') }}</h6>
                                </div>
                                <p class="description">{{ Str::words($newsItem->description, 10, '...') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row mt-4">
                {{-- if jumlah berita 0 maka tidak tampil --}}
                @if ($news->count() == 0)
                    <div class="col-lg-12 text-center">
                        <h4 class="text-center"></h4>
                    </div>
                @else
                    <nav aria-label="...">
                        {{-- pagination --}}
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
                @endif
            </div>
        </div>
    </section><!-- End Featured Services Section -->
@endsection
