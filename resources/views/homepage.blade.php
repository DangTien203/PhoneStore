@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="jumbotron text-center bg-primary text-white py-5">
        <div class="container">
            <h1 class="display-4">Welcome to PhoneStore</h1>
            <p class="lead">
                Your ultimate destination for the latest smartphones, unbeatable deals, and outstanding customer service.
            </p>
            <a href="{{ url('/phones') }}" class="btn btn-light btn-lg mt-3">Explore Our Collection</a>
        </div>
    </div>

    <!-- Introduction Section -->
    <section class="my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>About PhoneStore</h2>
                    <p>
                        At PhoneStore, we pride ourselves on offering the most advanced smartphones at competitive prices.
                        Whether you’re looking for cutting-edge technology or budget-friendly options, we have something for everyone.
                    </p>
                    <p>
                        Our team is dedicated to ensuring you get the perfect phone to meet your needs, with excellent after-sales support and expert guidance.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://scontent.fhan4-3.fna.fbcdn.net/v/t39.30808-6/437856941_965822635116034_7845282337868278376_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFAGDpmt39h_DxAc3tNjoLx0mZM5SNRgW7SZkzlI1GBbgz2hlvRtWi4nHUF6mtH6ZNdsoSL8tixg8Ic8RDh2AbL&_nc_ohc=QAphGkXtFRIQ7kNvgGElV3l&_nc_oc=AdjZZ-r-5BQkIaOSoV8ShoDM3jd_hIiLpcWV8qWFUjdBM4eRldC3ypZnaMa-DFOdlrk&_nc_zt=23&_nc_ht=scontent.fhan4-3.fna&_nc_gid=AludVM2HjorNnR-ZE_lgQ0C&oh=00_AYATXVjtBY5028Iz6bfXoaF2G8oKMo-tH1IjcGI-_0VojQ&oe=6768243C" height="450px" width="370px" alt="About PhoneStore" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Phones Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Phones</h2>
            <div class="row">
                <!-- Example Phone 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJJgytEuVQq5PLlHC0z6YvW5O-Caz6bcxkTQ&s" height="290px" width="350px" class="card-img-top" alt="Phone 1">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 14 Pro</h5>
                            <p class="card-text">Experience the latest Apple innovation with stunning performance and design.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Example Phone 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://cdn11.dienmaycholon.vn/filewebdmclnew/public/userupload/files/news/dien-thoai-di-dong/thiet-ke-thanh-lich-cua-galaxy-s23-5g.jpg" height="290px" width="350px" class="card-img-top" alt="Phone 2">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S23</h5>
                            <p class="card-text">Unleash powerful performance with a sleek and vibrant display.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Example Phone 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://fmmall.my/wp-content/uploads/2023/10/PIXEL-8-PRO.jpg" height="290px" width="350px" class="card-img-top" alt="Phone 3">
                        <div class="card-body">
                            <h5 class="card-title">Google Pixel 8</h5>
                            <p class="card-text">Capture every moment perfectly with Google's advanced camera technology.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">What Our Customers Say</h2>
            <div class="row">
                <!-- Review 1 -->
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <p class="card-text">
                                "PhoneStore made it so easy to find my dream phone. Great prices and fast delivery!"
                            </p>
                            <h5 class="card-title">- John Doe</h5>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <p class="card-text">
                                "Amazing customer service and top-quality phones. Highly recommended!"
                            </p>
                            <h5 class="card-title">- Jane Smith</h5>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <p class="card-text">
                                "Best phone store in town! I found exactly what I was looking for."
                            </p>
                            <h5 class="card-title">- Mike Johnson</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h2>Ready to Find Your Perfect Phone?</h2>
            <p>Browse our collection now and discover amazing deals on the latest smartphones.</p>
            <a href="{{ url('/phones/shopping') }}" class="btn btn-light btn-lg mt-3">Start Shopping</a>
        </div>
    </section>
@endsection
