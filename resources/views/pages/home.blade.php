@extends('layouts.app')
@section('content')
    <div class="mx-5">
        {{-- Carousel --}}
        <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner rounded-5">
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
        <div class="container-fluid mt-5 rounded-4 px-4 py-3">
            <label for="whats">
                <h3>Apa itu DISPEN'IN ???</h3>
            </label>
            <div class="row" id="whats">
                <div class="col">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, incidunt odio fugit vero laudantium
                    molestiae omnis inventore sapiente iure possimus, aut tempore voluptatibus. Temporibus, voluptatem
                    dolorem laboriosam vero repellendus ex ea architecto veniam praesentium modi odio laborum. Velit
                    aspernatur eveniet voluptatibus temporibus soluta. Nam, porro est. Praesentium provident necessitatibus
                    sapiente. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos praesentium porro dolore natus
                    nulla molestias, recusandae voluptatum eveniet expedita nostrum?
                    <br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam nostrum, similique impedit, expedita
                    harum placeat reprehenderit officia dolore facere unde aut esse eius reiciendis corporis amet deleniti
                    sequi repellendus error fugit perspiciatis nihil nulla quasi. Ab eaque doloribus provident a incidunt
                    accusantium! Voluptates vitae natus voluptatibus provident? Quisquam eos optio fugit. Expedita explicabo
                    recusandae officiis totam nobis consequuntur at illum cupiditate repellat, sed iste aspernatur, quod
                    ipsum vitae aut numquam amet, magnam commodi eligendi earum modi. Modi porro delectus eos aperiam autem
                    distinctio possimus debitis voluptatum at, ipsa omnis laborum doloribus ad reprehenderit incidunt vitae
                    minus magnam ratione ullam provident. Temporibus ex recusandae tempora enim corporis sunt dolorem
                    laborum itaque doloremque unde tempore porro, inventore voluptates provident qui eveniet iusto!
                </div>
            </div>
        </div>
        {{-- End Card --}}

        {{-- Feature --}}
        <div class="container-fluid mt-5 rounded-4 px-4 py-3">
            <label for="">
                <h3>Features ???</h3>
            </label>
            <div class="row row-gap-2 mt-2">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card rounded-5 px-2">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card rounded-5 px-2">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card rounded-5 px-2">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card rounded-5 px-2">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Feature --}}
    </div>
@endsection
