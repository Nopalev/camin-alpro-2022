@extends('components/layout')

@section('content')
<section>
    <div class="container-xl">
            <h1 class="text-center">Daftar Camin Alpro 2022</h1>
            <div class="row mt-4" style="">
                @foreach ($data as $camin)
                    <div class="card col-3 mx-auto">
                        <a href="{{ $camin["id"] }}" target="_blank">
                            <img src={{ $camin["image"] }} class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $camin["nama"] }}
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection