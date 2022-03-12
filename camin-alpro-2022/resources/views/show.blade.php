@extends('components/layout')

@section('content')
<section>
    <div class="container-xl">
            <h1 class="text-center">Daftar Camin Alpro 2022</h1>
            <div class="row mt-4" style="">
                <div class="card col-3 mx-auto">
                    <img src={{ $camin["image"] }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $camin["nama"] }}
                        </h5>
                        <p class="card-text">Nrp : {{ $camin["nrp"] }}</p>
                        <p class="card-text">Jurusan : {{ $camin["jurusan"] }}</p>
                        <p class="card-text">Angkatan : {{ $camin["angkatan"] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection