<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalogue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 1rem 0;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
            padding: 2rem;
        }

        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 1rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0 0 0.5rem;
            color: #333;
        }

        .card-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.4;
            margin: 0 0 1rem;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-footer a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .card-footer a:hover {
            background-color: #45a049;
        }

        .card-footer span {
            font-size: 0.9rem;
            color: #333;
        }
    </style>
</head>

<body>
    <header>
        Book Catalogue
    </header>
    <div class="container">
        {{-- @dd($books) --}}
        @if ($books->isNotEmpty())
            @foreach ($books as $item)
                <div class="card">
                    <img src="{{ $item->imageUrl }}" alt="Book Cover">
                    <div class="card-content">
                        <h3 class="card-title"> {{ $item->name }}</h3>
                        <p class="card-description">{{ $item->description }}</p>
                        <div class="card-footer">
                            <span>$ {{ $item->price }}</span>
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-error" >
                <div class="icon" style="color:yellow;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                </div>
                <span>
                    No Data found
                </span>
            </div>
        @endif
        <!-- Card 1 -->


        {{-- <!-- Card 2 -->
        <div class="card">
            <img src="https://picsum.photos/300/200" alt="Book Cover">
            <div class="card-content">
                <h3 class="card-title">Book Title 2</h3>
                <p class="card-description">Aliquam eget ligula et ligula convallis pulvinar nec ut nulla. Mauris consectetur.</p>
                <div class="card-footer">
                    <span>$18.50</span>
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="https://picsum.photos/300/200" alt="Book Cover">
            <div class="card-content">
                <h3 class="card-title">Book Title 3</h3>
                <p class="card-description">Vestibulum varius sapien in libero facilisis, at aliquet metus tincidunt. Fusce eget.</p>
                <div class="card-footer">
                    <span>$12.75</span>
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div> --}}
    </div>
</body>

</html>
