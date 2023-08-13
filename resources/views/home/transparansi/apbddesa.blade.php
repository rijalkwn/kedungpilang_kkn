@extends('home.layout.master')

@section('content')
    <style>
        /* Define the width for each column */
        th:nth-child(1),
        td:nth-child(1) {
            width: 30%;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 20%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 20%;
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 20%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #46a584;
        }

        tr:hover {
            background-color: #3fbbc0;
        }
    </style>
    <div class="section-title mt-4">
        <h2>ANGGARAN DAN PENDAPATAN BELANJA DESA KEDUNGPILANG</h2>
    </div>
    <div class="row ms-4 me-4" style="text-align: justify">
        <div class="col-lg-10 m-auto">
            <p style="text-align: justify">Anggaran pendapatan dan belanja desa (APBDes) adalah peraturan desa yang memuat
                sumber-sumber penerimaan dan
                alokasi pengeluaran desa dalam kurun waktu satu tahun. APB Desa terdiri atas bagian pendapatan Desa, belanja
                Desa dan pembiayaan. Rancangan APB Desa dibahas dalam musyawarah perencanaan pembangunan desa. Kepala Desa
                bersama BPD menetapkan APB Desa setiap tahun dengan Peraturan Desa.</p>
            <h4>Sumber Dana APBDes</h4>
            <p>Menurut UU 32/2004 dan PP 72/2005 menyebutkan sumber-sumber pendapatan desa meliputi :</p>
            <ol>
                <li>Pendapatan asli desa, terdiri dari hasil usaha desa, hasil kekayaan desa, hasil swadaya dan partisipasi,
                    hasil gotong royong, dan lain-lain pendapatan asli desa yang sah,</li>
                <li>bagi hasil pajak daerah Kabupaten/Kota paling sedikit 1.0% (sepuluh per seratus) untuk desa dan dari
                    retribusi Kabupaten/Kota sebagian diperuntukkan bagi desa,</li>
                <li>bagian dari dana perimbangan keuangan pusat dan daerah yang diterima oleh Kabupaten/Kota untuk Desa
                    paling sedikit 10% (sepuluh per seratus), yang pembagiannya untuk setiap Desa secara proporsional yang
                    merupakan alokasi dana desa,</li>
                <li>bantuan keuangan dari Pemerintah, Pemerintah Provinsi, dan Pemerintah Kabupaten/Kota dalam rangka
                    pelaksanaan urusan pemerintahan,</li>
                <li>hibah dan sumbangan dari pihak ketiga yang tidak mengikat.</li>

            </ol>
            <h4>Fungsi APBDes</h4>
            <p>APBDes memiliki fungsi, sebagai berikut :</p>
            <ol>
                <li>Alat perencanaan
                    <p>Anggaran merupakan alat pengendali manajemen desa dalam rangka mencapai tujuan. Anggaran desa
                        digunakan untuk merencanakan kegiatan apa saja yang dilakukan oleh desa beserta rincian biaya yang
                        dibutuhkan dan rencana sumber pendapatan yang akan diperoleh desa. Anggaran sebagai alat perencanaan
                        digunakan untuk:
                    <ul>
                        <li>Merumuskan tujuan dan sasaran kebijakan agar sejalan dengan visi, misi dan sasaran yang sudah
                            ditetapkan.</li>
                        <li>Merencanakan berbagai program, kegiatan, serta sumber pendapatan.</li>
                        <li>Mengalokasikan dana untuk program dan kegiatan yang sudah disusun.</li>
                        <li>Menentukan indikator kinerja dan pencapaian strategi.</li>
                    </ul>
                    </p>

                </li>
                <li>Alat pengendalian
                    <p>Anggaran berisi perencanaan detail atas pendapatan dan pengeluaran desa, dimaksudkan dengan adanya
                        anggaran, semua bentuk pengeluaran dan pemasukan dapat dipertanggungjawabkan kepada publik. Tanpa
                        adanya
                        anggaran, desa akan sulit mengendalikan pengeluaran dan pemasukan.</p>
                </li>
                <li>Alat kebijakan fiskal
                    <p>Dengan mengunakan anggaran dapat diketahui bagaimana kebijaksanaan fiskal yang akan dijalankan desa,
                        dengan demikian akan mudah untuk memprediksi dan mengestimasi ekonomi dan organisasi. Anggaran dapat
                        digunakan untuk mendorong, mengkoordinasi dan memfasilitasi kegiatan ekonomi masyarakat untuk
                        mempercepat pertumbuhan ekonomi.</p>
                </li>
                <li>Alat koordinasi dan komunikasi
                    <p>Dalam menyusun anggaran, pasti antar unit kerja akan melakukan komunikasi dan koordinasi. Dalam
                        perencanaan dan pelaksanaan anggaran harus dikomunikasikan ke seluruh perangkat desa. Anggaran
                        publik yang disusun dengan baik akan mampu mendeteksi terjadinya ikonsistensi suatu unit kerja di
                        dalam pencapaian tujuan desa.</p>
                </li>
                <li>Alat penilaian kinerja
                    <p>Perencanaan anggaran dan pelaksanaannya akan menjadi penilaian kinerja perangkat desa. Kinerja
                        perangkat desa akan dinilai berdasarkan pencapaian target anggaran serta pelaksanaan efisiensi
                        anggaran. Anggaran merupakan alat yang efektif untuk melakukan pengendalian dan penilaian kinerja.
                    </p>
                </li>
                <li>Alat motivasi
                    <p>Anggaran dapat digunakan untuk memberi motivasi kepada perangkat desa dalam bekerja secara efektif
                        dan efisien. Dengan membuat anggaran yang tepat dan dapat melaksanakannya sesuai target dan tujuan
                        desa, maka desa dikatakan mempunyai kinerja yang baik.</p>
                </li>
            </ol>
            <p>Untuk merealisasikan fungsi diatas, maka perlu adanya penyusunan APBDes. Dalam penyusunan APBDes tentu
                memiliki kriteria serta kententuan.</p>
            <h4>Ketentuan Penyusunan APBDes</h4>
            <ul>
                <li>APB Desa disusun berdasarkan RKPDesa yang telah ditetapkan dengan Perdes.</li>
                <li>APB Desa disusun untuk masa 1 (satu) tahun anggaran, terhitung mulai 1 Januari sampai 31 Desember tahun
                    berikutnya.</li>
                <li>Prioritas Belanja Desa disepakati dalam Musyawarah Desa dan Musyawarah Perencanaan Pembangunan Desa
                    berdasarkan pada penilai kebutuhan masyarakat.</li>
                <li>Rancangan APB Desa harus dibahas bersama dengan Badan Permusyawaratan Desa (BPD).</li>
                <li>APB Desa dapat disusun sejak bulan September dan harus ditetapkan dengan Perdes, selambat-lambatnya pada
                    31 Desember pada tahun yang sedang dijalani.</li>
            </ul>
        </div>
    </div>
    <div class="row ms-4 me-4">
        <div class="col-lg-10 m-auto">
            <h5>1. PENDAPATAN DESA</h5>
        </div>
        <div class="col-lg-10 m-auto">
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th style="text-align: center"></th>
                        <th style="text-align: center">Anggaran</th>
                        <th style="text-align: center">Realisasi</th>
                        <th style="text-align: center">Selisih</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $firstPendapatanAsliDesa = true;
                    @endphp
                    @foreach ($pendapatandesa as $pendapatan)
                        @if ($pendapatan->jenis == 'Pendapatan Asli Desa')
                            @if ($firstPendapatanAsliDesa)
                                <tr>
                                    <td colspan="4">Pendapatan Asli Desa</td>
                                </tr>
                                @php
                                    $firstPendapatanAsliDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $pendapatan->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->anggaran, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->realisasi, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->selisih, 2, ',', '.') }}</td>
                            </tr>
                        @endif
                    @endforeach
                    @php
                        $firstPendapatanAsliDesa = true;
                    @endphp
                    @foreach ($pendapatandesa as $pendapatan)
                        @if ($pendapatan->jenis == 'Pendapatan Transfer')
                            @if ($firstPendapatanAsliDesa)
                                <tr>
                                    <td colspan="4">Pendapatan Transfer</td>
                                </tr>
                                @php
                                    $firstPendapatanAsliDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $pendapatan->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->anggaran, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->realisasi, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->selisih, 2, ',', '.') }}</td>
                            </tr>
                        @endif
                    @endforeach
                    @php
                        $firstPendapatanAsliDesa = true;
                    @endphp
                    @foreach ($pendapatandesa as $pendapatan)
                        @if ($pendapatan->jenis == 'Pendapatan Lain Lain')
                            @if ($firstPendapatanAsliDesa)
                                <tr>
                                    <td colspan="4">Pendapatan Lain Lain</td>
                                </tr>
                                @php
                                    $firstPendapatanAsliDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $pendapatan->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->anggaran, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->realisasi, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->selisih, 2, ',', '.') }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    @php
                        $firstPendapatanAsliDesa = true;
                    @endphp
                    @foreach ($pendapatandesa as $pendapatan)
                        @if ($pendapatan->jenis == 'Total')
                            @if ($firstPendapatanAsliDesa)
                                <tr>
                                    <td colspan="4">Total</td>
                                </tr>
                                @php
                                    $firstPendapatanAsliDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $pendapatan->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->anggaran, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->realisasi, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pendapatan->selisih, 2, ',', '.') }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row ms-4 me-4 mt-4">
        <div class="col-lg-10 m-auto">
            <h5>2. BELANJA DESA</h5>
        </div>
        <div class="col-lg-10 m-auto">
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th style="text-align: center"></th>
                        <th style="text-align: center">Anggaran</th>
                        <th style="text-align: center">Realisasi</th>
                        <th style="text-align: center">Selisih</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $firstBelanjaDesa = true;
                    @endphp
                    @foreach ($belanjadesa as $belanja)
                        @if ($belanja->jenis == 'Belanja')
                            <tr>
                                <td style="padding-left: 50px">{{ $belanja->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($belanja->anggaran, 2, ',', '.') }}</td>
                                <td style="text-align: right">Rp.{{ number_format($belanja->realisasi, 2, ',', '.') }}</td>
                                <td style="text-align: right">Rp.{{ number_format($belanja->selisih, 2, ',', '.') }}</td>
                            </tr>
                        @endif
                    @endforeach
                    @php
                        $firstBelanjaDesa = true;
                    @endphp
                    @foreach ($belanjadesa as $belanja)
                        @if ($belanja->jenis == 'Total')
                            @if ($firstBelanjaDesa)
                                <tr>
                                    <td colspan="4">Total</td>
                                </tr>
                                @php
                                    $firstBelanjaDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $belanja->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($belanja->anggaran, 2, ',', '.') }}</td>
                                <td style="text-align: right">Rp.{{ number_format($belanja->realisasi, 2, ',', '.') }}</td>
                                <td style="text-align: right">Rp.{{ number_format($belanja->selisih, 2, ',', '.') }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row ms-4 me-4 mt-4">
        <div class="col-lg-10 m-auto">
            <h5>3. PEMBIAYAAN DESA</h5>
        </div>
        <div class="col-lg-10 m-auto">
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th style="text-align: center"></th>
                        <th style="text-align: center">Anggaran</th>
                        <th style="text-align: center">Realisasi</th>
                        <th style="text-align: center">Selisih</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $firstPembiayaanDesa = true;
                    @endphp
                    @foreach ($pembiayaandesa as $pembiayaan)
                        @if ($pembiayaan->jenis == 'Penerimaan Pembiayaan')
                            @if ($firstPembiayaanDesa)
                                <tr>
                                    <td colspan="4">Penerimaan Pembiayaan</td>
                                </tr>
                                @php
                                    $firstPembiayaanDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $pembiayaan->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->anggaran, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->realisasi, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->selisih, 2, ',', '.') }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    @php
                        $firstPembiayaanDesa = true;
                    @endphp
                    @foreach ($pembiayaandesa as $pembiayaan)
                        @if ($pembiayaan->jenis == 'Pengeluaran Pembiayaan')
                            @if ($firstPembiayaanDesa)
                                <tr>
                                    <td colspan="4">Pengeluaran Pembiayaan</td>
                                </tr>
                                @php
                                    $firstPembiayaanDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $pembiayaan->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->anggaran, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->realisasi, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->selisih, 2, ',', '.') }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    @php
                        $firstPembiayaanDesa = true;
                    @endphp
                    @foreach ($pembiayaandesa as $pembiayaan)
                        @if ($pembiayaan->jenis == 'Total')
                            @if ($firstPembiayaanDesa)
                                <tr>
                                    <td colspan="4">Total</td>
                                </tr>
                                @php
                                    $firstPembiayaanDesa = false;
                                @endphp
                            @endif
                            <tr>
                                <td style="padding-left: 50px">{{ $pembiayaan->kegiatan }}</td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->anggaran, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->realisasi, 2, ',', '.') }}
                                </td>
                                <td style="text-align: right">Rp.{{ number_format($pembiayaan->selisih, 2, ',', '.') }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
