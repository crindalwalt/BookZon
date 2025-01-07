<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #5e548e;
            --secondary-color: #f4e285;
            --tertiary-color: #f4a259;
            --background-color: #e0e1dd;
        }

        body {
            background-color: var(--background-color);
        }

        .navbar {
            background-color: var(--primary-color);
        }

        .navbar-brand,
        .nav-link,
        .user-info {
            color: white;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .category {
            padding: 40px 0;
        }

        .category h2 {
            color: var(--primary-color);
        }

        .book-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .carousel-item img {
            height: 300px;
            object-fit: cover;
        }

        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">BookStore</a>
            <div class="collapse navbar-collapse">
                <form class="d-flex w-50 mx-auto">
                    <input class="form-control" type="search" placeholder="Search books...">
                </form>
                <div class="user-info d-flex align-items-center">
                    <img src="https://via.placeholder.com/40" alt="Avatar" class="rounded-circle me-2">
                    <span>{{ auth()->user()->name }}</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to BookStore</h1>
            <p>Explore the world of books with us.</p>
        </div>
    </section>

    <!-- Category Section -->
    <section class="category">
        <div class="container">
            <h2>Browse by Category</h2>
            <div class="row mt-4">
                @if ($categories->isNotEmpty())
                    @foreach ($categories as $cat)
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="imgholder">
                                        <img src="{{ $cat->icon }}" alt="" class="img-fluid" style="width:100px;height:100px;border-radius:50%;">
                                    </div>
                                    <h5 class="card-title mt-3">{{ $cat->name }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-danger">No categories found.</div>
                @endif

            </div>
        </div>
    </section>

    <!-- Books Grid -->
    <section class="books">
        <div class="container mt-5">
            <h2>Popular Books</h2>
            <div class="row mt-4">
                <!-- book card start -->
                @if ($kitabein->isNotEmpty())
                    @foreach ($kitabein as $item)
                        <div class="col-md-3 my-2">
                            <div class="card book-card">
                                <img src="{{ $item->imageUrl }}" class="card-img-top" alt="Book">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <p class="card-text">Price: ${{ $item->price }}</p>
                                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="18" fill="currentColor" class="bi bi-person-square"
                                            viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path
                                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                        </svg> {{ $item->author }}</p>
                                    <a href="{{ route('bookDetail', $item->id) }}"
                                        class="btn btn-md btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-danger">No books found.</div>
                @endif

                <!-- book card end -->
            </div>
        </div>
    </section>

    <!-- Offers Carousel -->
    {{-- <section class="offers">
        <div class="container">
            <h2>Special Offers</h2>
            <div id="offersCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="Offer">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="Offer">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#offersCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#offersCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section> --}}

    <!-- Testimonials -->
    {{-- <section class="testimonials">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p>"Amazing collection of books!"</p>
                            <p>- Customer Name</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar testimonials -->
            </div>
        </div>
    </section> --}}

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2025 BookStore. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
