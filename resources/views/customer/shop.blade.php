@extends('layouts.frontend.app')

@section('title', 'Shop')

@section('content')
    <div class="row mb-5">

        <div class="col-md-3 col-sm-12 mb-3 align-items-center">
            <div class="card">
                <div class="card-header fw-bold text-center">
                    Category
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Laptop
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column">
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Asus
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Acer
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> HP
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> MSI
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Spareparts
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column">
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> VGA
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> RAM
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Motherboard
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> CPU
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Accessories
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column">
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Mouse
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Headset
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Keyboard
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Speaker
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    PC
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column">
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Low-end
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> Mid-end
                                        </a>
                                        <a href="" class="page-link">
                                            <i class="fas fa-plus"></i> High-end
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                    @if($products->isEmpty())
                            <h1>Not Available Data...</h1>
                    @else
                        @foreach($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card h-100">
                                <img src="{{ asset('storage/product/' . $product->img_product) }}" class="card-img-top h-100" draggable="false" alt="">
                                <div class="card-body">
                                    <p class="m-0 text-justify">{{ $product->name_product }}</p>
                                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center">
                                    <p class="m-auto fw-semibold" style="font-size: 16px">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                    <a class="btn btn-sm btn-outline-primary" style="font-size: 24px;">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
            </div>

            <div class="mt-5">
                {{ $products->links() }}
            </div>

        </div>

    </div>
@endsection
