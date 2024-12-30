<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us & Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }

        .header {
            background-color: #00796b;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #00796b;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
        }

        .contact-form label {
            font-weight: bold;
            color: #333;
        }

        .contact-form input, .contact-form textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form button {
            padding: 15px;
            background-color: #00796b;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background-color: #004d40;
        }

        .contact-info {
            margin-top: 30px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>


<!-- Contact Page -->
<section class="header">
    <h1>Contact Us</h1>
</section>
<section class="content">
    <h1>Get in Touch</h1>
    <p>Have questions or need assistance? We are here to help! Reach out to us via the form below or use our contact information to connect directly with our team.</p>

    <form class="contact-form">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Type your message here" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <div class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Email:</strong> support@insuranceprovider.com</p>
        <p><strong>Phone:</strong> +1-800-123-4567</p>
        <p><strong>Address:</strong> 123 Insurance Street, Suite 456, Cityname, State, ZIP</p>
    </div>
</section>

</body>
</html>
