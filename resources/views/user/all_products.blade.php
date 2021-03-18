@extends('layouts.test')
@section('content')

    <!-- -----------------product section-------------------- -->
    <section id="variety" class="variety pt-4">

        <div class="container">
            <div class="section-title">
                <h2 style="color: #fdc134;" class="text-center font-weight-bold">
                    Products
                </h2>
            </div>
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <a href="{{ route('view.more', $item->product_id) }}">
                                    <img style="height: 250px; width:290px;"
                                        src="{{ asset('/images/' . $item->product_image) }}" alt=""></a>
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

        </div>
    </section>
    <!-- -----------------End product section-------------------- -->
@endsection
