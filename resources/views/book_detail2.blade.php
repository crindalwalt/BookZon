<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
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
            color: #333;
        }

        .navbar {
            background-color: var(--primary-color);
        }

        .navbar-brand, .nav-link, .user-info {
            color: white;
        }

        .book-detail-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .book-info {
            margin-top: 40px;
        }

        .book-cover {
            max-width: 100%;
            height: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .book-description {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .reviews {
            margin-top: 40px;
        }

        .review {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
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
                    <span>User Name</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Book Detail Header -->
    <section class="book-detail-header">
        <div class="container">
            <h1>{{  $book->name }}</h1>
            <p>by {{ $book->author }}</p>
        </div>
    </section>

    <!-- Book Information -->
    <section class="book-info">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="{{ $book->imageUrl }}" alt="Book Cover" class="book-cover">
                </div>
                <div class="col-md-8">
                    <h2>About the Book</h2>
                    <p>{{ $book->description }}</p>
                    <p><strong>Genre:</strong> Fiction</p>
                    <p><strong>Rating:</strong> 4.8/5</p>
                    <p><strong>Price:</strong> ${{ $book->price }}</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Description -->
    <section class="book-description mt-5">
        <div class="container">
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum turpis sit amet urna varius, quis luctus dolor egestas. Nulla facilisi. Aliquam erat volutpat. Sed ac arcu id ligula lacinia dictum sed at risus. Nulla suscipit, justo a tempus egestas, libero nunc elementum justo, vitae eleifend metus purus et nunc.</p>
            <p>Suspendisse potenti. Praesent vel scelerisque lacus. Donec luctus enim et ante placerat, id facilisis mauris scelerisque. Sed vitae vehicula lectus. Vivamus sed pharetra nulla, non tristique risus. Ut fringilla eros a nunc posuere pellentesque.</p>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews">
        <div class="container">
            <h3>Customer Reviews</h3>
            <div class="review">
                <p>"An absolutely amazing read! Highly recommend."</p>
                <p>- John Doe</p>
            </div>
            <div class="review">
                <p>"A masterpiece of storytelling. Couldn't put it down."</p>
                <p>- Jane Smith</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2025 BookStore. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
