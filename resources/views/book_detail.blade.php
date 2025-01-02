<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #F5F5F5;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #6200EE;
            color: #FFFFFF;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-weight: 500;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .book-detail {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .book-detail img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .book-info {
            flex: 1;
        }

        .book-info h2 {
            color: #6200EE;
            margin-bottom: 1rem;
        }

        .book-info p {
            margin-bottom: 1rem;
        }

        .reviews, .recommended, .promotion {
            margin-bottom: 2rem;
        }

        .reviews h3, .recommended h3, .promotion h3 {
            color: #6200EE;
            margin-bottom: 1rem;
        }

        .review-item {
            background: #FFFFFF;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .recommended-books {
            display: flex;
            gap: 1rem;
        }

        .recommended-book {
            background: #FFFFFF;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
        }

        .promotion {
            background: #FFCC00;
            color: #333;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #FFFFFF;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <a href="{{  route("home") }}">bookDetail</a>
        </h1>
        <nav>
            <a href="#" style="color: white; text-decoration: none; margin-left: 1rem;">Home</a>
            <a href="#" style="color: white; text-decoration: none; margin-left: 1rem;">Categories</a>
            <a href="#" style="color: white; text-decoration: none; margin-left: 1rem;">Contact</a>
        </nav>
    </header>

    <div class="container">
        <div class="book-detail">
            <div class="book-image">
                <img src="https://picsum.photos/300/300" alt="Book Cover">
            </div>
            <div class="book-info">
                <h2>{{ $book->name }}</h2>
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p><strong>Genre:</strong> Fiction</p>
                <p><strong>Description:</strong> {{ $book->description }}</p>
                <p><strong>Price:</strong> ${{ $book->price }}</p>
            </div>
        </div>

        <div class="reviews">
            <h3>Reviews</h3>
            <div class="review-item">
                <p><strong>Reviewer:</strong> Jane Smith</p>
                <p>"An absolutely captivating read! Highly recommend."</p>
            </div>
            <div class="review-item">
                <p><strong>Reviewer:</strong> Mark Brown</p>
                <p>"Well-written and engaging from start to finish."</p>
            </div>
        </div>

        <div class="recommended">
            <h3>Recommended Books</h3>
            <div class="recommended-books">
                <div class="recommended-book">
                    <p>Another Great Book</p>
                </div>
                <div class="recommended-book">
                    <p>Must Read Novel</p>
                </div>
                <div class="recommended-book">
                    <p>Fictional Masterpiece</p>
                </div>
            </div>
        </div>

        <div class="promotion">
            <h3>Special Promotion</h3>
            <p>Buy 2 books and get 1 free! Limited time offer.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 BookStore. All Rights Reserved.</p>
    </footer>
</body>
</html>
