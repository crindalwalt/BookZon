<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Provider</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background: linear-gradient(135deg, #e0f7fa, #ffffff);
            height: 90vh;
        }

        .hero-content {
            max-width: 50%;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0 0 20px;
            color: #00796b;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #555;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .button-primary {
            padding: 15px 25px;
            background-color: #00796b;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .button-primary:hover {
            background-color: #004d40;
        }

        .button-secondary {
            padding: 15px 25px;
            background-color: transparent;
            color: #00796b;
            border: 2px solid #00796b;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }

        .button-secondary:hover {
            background-color: #00796b;
            color: #fff;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
        }

        /* Features Section */
        .features {
            text-align: center;
            padding: 50px 20px;
            background-color: #ffffff;
        }

        .features h2 {
            font-size: 2.5rem;
            color: #00796b;
            margin-bottom: 20px;
        }

        .features-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .feature-card {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .feature-card i {
            font-size: 3rem;
            color: #00796b;
            margin-bottom: 10px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #555;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
                height: auto;
            }

            .hero-content {
                max-width: 100%;
                margin-bottom: 30px;
            }

            .features-grid {
                flex-direction: column;
                align-items: center;
            }

            .feature-card {
                width: 100%;
                max-width: 400px;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Your Protection, Our Priority</h1>
        <p>Affordable, reliable, and tailored insurance solutions for every stage of life.</p>
        <div class="hero-buttons">
            <a href="{{ route("books") }}" class="button-primary">Browse all books</button>
            <button class="button-secondary">Learn More</button>
        </div>
    </div>
    <div class="hero-image">
        <img src="https://picsum.photos/500/500" alt="Insurance Illustration">
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <h2>Why Choose Us?</h2>
    <div class="features-grid">
        <div class="feature-card">
            <i class="material-icons">shield</i>
            <h3>Comprehensive Coverage</h3>
            <p>Protect yourself and your loved ones with our wide range of insurance plans.</p>
        </div>
        <div class="feature-card">
            <i class="material-icons">attach_money</i>
            <h3>Affordable Plans</h3>
            <p>We offer premium plans tailored to fit your budget.</p>
        </div>
        <div class="feature-card">
            <i class="material-icons">support_agent</i>
            <h3>24/7 Support</h3>
            <p>Our dedicated team is here to assist you around the clock.</p>
        </div>
    </div>
</section>

<script src="https://fonts.googleapis.com/icon?family=Material+Icons"></script>
</body>
</html>
