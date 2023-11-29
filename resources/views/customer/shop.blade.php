@extends('layouts.frontend.app')

@section('title', 'Shop')

@section('content')
    <div class="row mb-5">

        <div class="col-md-3 col-sm-12 mb-3 align-items-center px-4">
            <div class="row">
                <div class="card w-50px category">
                    <div class="card-header text-center">
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
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('frontend/product/laptop-1.jpg') }}" class="card-img-top h-50px" draggable="false" alt="">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify">Asus Rog XVIII</p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p class="m-auto fw-semibold" style="font-size: 12px">Rp. 19.000.000</p>
                            <a class="btn btn-sm btn-outline-primary" style="font-size: 24px;">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-header m-auto" style="border-radius: 10px">
                            <img src="{{ asset('frontend/product/laptop-1.jpg') }}" style="width: 100%" draggable="false" alt="">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify">Asus Rog XVIII</p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p class="m-auto fw-semibold" style="font-size: 12px">Rp. 19.000.000</p>
                            <a class="btn btn-sm btn-outline-primary" style="font-size: 24px;">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-header m-auto" style="border-radius: 10px">
                            <img src="{{ asset('frontend/product/laptop-1.jpg') }}" style="width: 100%" draggable="false" alt="">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify">Asus Rog XVIII</p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p class="m-auto fw-semibold" style="font-size: 12px">Rp. 19.000.000</p>
                            <a class="btn btn-sm btn-outline-primary" style="font-size: 24px;">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-header m-auto" style="border-radius: 10px">
                            <img src="{{ asset('frontend/product/laptop-1.jpg') }}" style="width: 100%" draggable="false" alt="">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify">Asus Rog XVIII</p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer gap-1 d-flex justify-content-between align-items-center">
                            <p class="m-auto fw-semibold" style="font-size: 12px">Rp. 19.000.000</p>
                            <a class="btn btn-sm btn-outline-primary fs-18px">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-header m-auto" style="border-radius: 10px">
                            <img src="{{ asset('frontend/product/laptop-1.jpg') }}" style="width: 100%" draggable="false" alt="">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify">Asus Rog XVIII</p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p class="m-auto fw-semibold" style="font-size: 12px">Rp. 19.000.000</p>
                            <a class="btn btn-sm btn-outline-primary" style="font-size: 24px;">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>
@endsection
