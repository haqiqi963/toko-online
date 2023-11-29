@extends('layouts.frontend.app')

@section('title', 'Contact')

@section('content')
    <div class="row my-5 align-items-center">
        <div class="col-md-6 my-3">
            <div class="content-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi blanditiis consequuntur cupiditate debitis dicta dolore ducimus ea earum eveniet excepturi explicabo fuga illum inventore ipsum laudantium magnam mollitia nam natus necessitatibus nesciunt nisi numquam obcaecati optio pariatur provident quas, quibusdam quo quos reprehenderit rerum sequi sint suscipit totam, ut vero voluptatem? Consequuntur, culpa deleniti eius incidunt mollitia omnis quasi quisquam reiciendis temporibus voluptas? Ab autem dicta explicabo facilis illum impedit inventore laudantium minus mollitia, natus nihil nulla quam qui quibusdam quod reprehenderit tenetur. Atque blanditiis consectetur consequuntur doloremque, ducimus earum excepturi facere illo in libero magnam molestias neque nisi odit porro quae ratione, sed veritatis voluptas voluptates. A architecto culpa incidunt, inventore iusto labore nam non officiis, optio quod recusandae sed soluta veniam. Animi corporis dicta iste neque quos repellendus vel veritatis. Adipisci commodi hic in molestias quaerat qui quia saepe, veniam voluptatum? Ducimus nobis quisquam saepe totam. Architecto commodi fugit illum ipsa laudantium maiores, nobis obcaecati officiis, praesentium quaerat rem reprehenderit sequi unde? Cumque ipsa ipsam modi obcaecati totam? Ad atque blanditiis consectetur delectus dolore ex expedita, fuga iste itaque iusto laborum magnam molestias nam nulla perspiciatis quas rem repudiandae saepe sit sunt ullam vel, veritatis voluptates voluptatum?
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div>
                <img src="{{ asset('frontend/techno.jpg') }}" class="rounded shadow" width="100%" alt="">
            </div>
        </div>


        <div class="col-12 mt-3"><!-- This will make the following div visible only on medium and larger screens -->
            <div class="d-flex flex-column">
                <div class="d-flex align-items-center">
                    <i class="fa fa-users fa-2x"></i>
                    <p class="m-0">+ More than 300 customers</p>
                </div>
                <div class="d-flex align-items-center my-3">
                    <i class="fa-regular fa-thumbs-up fa-2x"></i>
                    <p class="m-0">+ More than 300 customers are satisfied with our products and services</p>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fa-brands fa-shopify fa-2x"></i>
                    <p class="m-0">+ More than 300 Products</p>
                </div>
            </div>
        </div>

        <h4 class="text-center mt-5">Contact Us</h4>
        <hr>
        <div class="col-md-6 offset-md-3 my-3">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="fw-bold">Feedback and suggestions</h4>
                </div>
                <div class="card-body">
                    <p class="text-center fw-semibold">We appreciate and welcome your feedback. Please feel free to share any critiques or suggestions regarding our Products or Services. Your insights are valuable in helping us improve and excel.</p>
                    <form action="" method="post">
                        @csrf
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Input your email here...">
                        </div>
                        <div>
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Input your message here..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Send Message</button>

                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection
