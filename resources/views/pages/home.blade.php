@extends('layouts.app')
@section('content')
    <div class="mx-5">
        {{-- Carousel --}}
        <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.jp/760x260.png" class="d-block w-100 rounded-5" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.jp/760x260.png" class="d-block w-100 rounded-5" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.jp/760x260.png" class="d-block w-100 rounded-5" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- End Carousel --}}

        {{-- Card --}}
        <div class="container-fluid text-center mt-5 rounded-4 p-2 bg-secondary">
            <div class="row">
                <div class="col">
                    Column
                </div>
                <div class="col">
                    Column
                </div>
                <div class="col">
                    Column
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    Column
                </div>
                <div class="col">
                    Column
                </div>
                <div class="col">
                    Column
                </div>
            </div>
        </div>
        {{-- End Card --}}
    </div>
@endsection
