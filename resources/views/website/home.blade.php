@extends('layouts.test')
@section('content')


    <!-- -------------Variety----------------------- -->
    <section id="variety" class="variety pt-4">

        <div class="container">
            <div class="section-title">
                <h2 style="color: #000000;" class="text-center font-weight-bold">
                    All Product
                </h2>



            </div>
            <div class="row">
                @foreach ($getData as $item)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img style="height: 250px; width:290px;"
                                    src="{{ asset('/images/' . $item->product_image) }}" alt="">
                            </div>
                            <div class="card-body">

                                <div>
                                    <a class="card-design" href="{{ route('view.more', $item->product_id) }}">
                                        {{ $item->product_name }}</a>
                                </div>
                                <a href="{{ route('view.more', $item->product_id) }}"><button
                                        class="card-text btn btn-warning">add-to-cart</button></a>

                            </div>
                        </div>

                    </div>

                    <!--  -->
                @endforeach





            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{ route('all.product') }}" class="btn btn-prod d-block">
                        View all Products
                        <i class="fas fa-carrot"></i>
                    </a>
                </div>
            </div>
            <div class="contact-us ">
                <p style="font-size:20px; color:white; padding:25px; text-align:center;">If you would like to make an
                    enquiry
                    or have a
                    question, please get in touch with us, we are always happy to hear from you.</p>
                <div class="row justify-content-center pb-5">
                    <div class="col-md-7 heading-section text-center">
                        <a href="{{ route('contact-us') }}"><button class="btn btn-secondary">
                                Contect Us
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------------End Variety----------------------- -->

    <!-- -----------------product section-------------------- -->

    <!-- -----------------End product section-------------------- -->
@endsection
