@extends('home.layout.master')

@section('content')
    <div class="section-title mt-4">
        <h2>Mitra BUMDES</h2>
    </div>

    <div class="mitra-list">
        @php
            $no = 1;
        @endphp
        @foreach ($mitrabumdes as $mitrabumdes)
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4>{{ $no++ }}. {{ $mitrabumdes->nama_usaha }} - Valuasi : {{ $mitrabumdes->valuasi }}</h4>
                    <p style="text-align: justify">{{ $mitrabumdes->deskripsi }}</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>ROI: {{ $mitrabumdes->roi }}%</p>
                            <p>ROA: {{ $mitrabumdes->roa }}%</p>
                            <p>ROE: {{ $mitrabumdes->roe }}%</p>
                        </div>
                        <div class="col-lg-6">
                            <p>GPM: {{ $mitrabumdes->gpm }}%</p>
                            <p>OPM: {{ $mitrabumdes->opm }}%</p>
                            <p>NPM: {{ $mitrabumdes->npm }}%</p>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    @endsection
