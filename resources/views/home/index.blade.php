@extends('home.layout.master')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            @foreach ($news as $index => $newsItem)
                <a href="/berita{{ $newsItem->id }}" style="text-decoration: none; color: inherit;">
                    <!-- News Item {{ $index + 1 }} -->
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"
                        style="background-image: url(image/{{ $newsItem->image }});">
                        <div class="container">
                            <h5>{{ $newsItem->title }}</h5>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->


@section('content')
    <!-- ======= About Us Section ======= -->
    <section id="visimisi" class="features">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang Desa Kedungpilang</h2>
            </div>
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right">
                    <p style="text-align: justify">Desa Kedungpilang terletak di Kecamatan Wonosamodro, Kabupaten
                        Boyolali. Desa Kedungpilang memiliki luas wilayah sebesar 398,1 Ha dengan
                        pembagian luas penggunaan
                        lahan untuk
                        Tanah Sawah sebesar 111,98 Ha dan untuk Tanah Kering 286,12 Ha. Desa Kedungpilang
                        memiliki demografi
                        penduduk dengan jumlah laki-laki sebanyak 1.146 orang dan perempuan sebanyak 1.132
                        orang. Kepadatan
                        penduduk desa ini ialah sebesar 572 per Km2. Mayoritas penduduk di desa ini berprofesi
                        sebagai
                        petani, peternak, dan pegawai. Desa ini memiliki beberapa komoditas keunggulan,
                        diantaranya Jagung
                        dan Singkong. Di Desa Kedungpilang sendiri terdapat 5 dusun diantaranya Kedungpilang,
                        Gambir, Kedung Bulu, Kunciombo, dan Kedung Padas.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('assets/img/peta.png') }}" class="img-fluid" alt="">
                </div>
            </div>

            {{-- <p>Desa Kedungpilang memiliki luas wilayah sebesar 398,1 Ha dengan pembagian luas penggunaan lahan untuk
                Tanah Sawah sebesar 111,98 Ha dan untuk Tanah Kering 286,12 Ha. Desa Kedungpilang memiliki demografi
                penduduk dengan jumlah laki-laki sebanyak 1.146 orang dan perempuan sebanyak 1.132 orang. Kepadatan
                penduduk desa ini ialah sebesar 572 per Km2. Mayoritas penduduk di desa ini berprofesi sebagai
                petani, peternak, dan pegawai. Desa ini memiliki beberapa komoditas keunggulan, diantaranya Jagung
                dan Singkong. Di Desa Kedungpilang sendiri terdapat 5 dusun.</p> --}}
        </div>
    </section><!-- End Features Section -->
    <!-- ======= Featured Services Section ======= -->
    {{-- <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita Terbaru Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($news as $news)
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <a href="/berita{{ $news->id }}" style="text-decoration: none; color: inherit;">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="member-img">
                                    <img src="/image/{{ $news->image }}" alt="" class=""
                                        style="width: 300px; height: 200px; object-fit: cover;">

                                </div>
                                <br>
                                <div class="text-center">
                                    <h6>{{ Str::words($news->title, 6, '...') }}</h6>
                                </div>
                                <p class="description">{{ Str::words($news->description, 8, '...') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Featured Services Section --> --}}


    <!-- ======= Cta Section ======= -->
    {{-- <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Sejarah Desa Kedungpilang</h3>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s</p>
                <a class="cta-btn scrollto" href="/sejarah">Lihat detail</a>
            </div>

        </div>
    </section><!-- End Cta Section --> --}}

    <!-- ======= Counts Section ======= -->
    {{-- <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
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
    </section><!-- End Featured Services Section --> --}}

    <!-- ======= Features Section ======= -->

    <section id="visimisi" class="features">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Visi dan Misi</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <div class="icon-box mt-5 mt-lg-0">
                        <i class="bx bx-receipt"></i>
                        <h4>Visi</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                    <div class="icon-box mt-5">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Misi</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/kepalamotto.png");'
                    data-aos="zoom-in"></div>
            </div>

        </div>
    </section><!-- End Features Section -->
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Perangkat Desa Kedungpilang</h2>
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
    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi Layanan Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($service as $service)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <img src="/image/{{ $service->image }}" alt="" class="img-fluid" width="100">
                        <h4>{{ $service->title }}</h4>
                        <p>{{ $service->description }}</p>
                        <a class="cta-btn scrollto" href="/informasi">Lihat detail</a>
                    </div>
                @endforeach



            </div>

        </div>
    </section><!-- End Featured Services Section --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>UMKM Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($umkm as $umkm)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <img src="/image/{{ $umkm->image }}" alt="" class="img-fluid" width="300">
                        <h4 class="mt-4">{{ $umkm->title }}</h4>
                        <p style="text-align: justify">{{ Str::words($umkm->description, 8, '...') }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Gallery Section ======= -->
    {{-- <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>Galeri Desa Kedungpilang</h2>
            </div>

            <div class="gallery-slider swiper">

                <div class="swiper-wrapper align-items-center">
                    @foreach ($galeri as $index => $galeri)
                        <div class="swiper-slide{{ $index === 0 ? 'active' : '' }}">
                            <a class="gallery-lightbox" href="image/{{ $galeri->image }}"> <img
                                    src="image/{{ $galeri->image }}" class="img-fluid" alt=""> </a>

                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination">
                </div>
            </div>
        </div>
    </section><!-- End Gallery Section --> --}}
@endsection
