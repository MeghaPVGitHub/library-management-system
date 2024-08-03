<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Home</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('library-background.jpg'); /* Replace 'library-background.jpg' with your image path */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff; /* Set text color to white for better visibility */
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8); /* Add subtle text shadow for better contrast */
        }
        .container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background for better readability */
            padding: 2rem;
            border-radius: 10px;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-transform: uppercase; /* Uppercase text for title */
        }
        .nav-links {
            margin-top: 2rem;
        }
        .nav-links a {
            display: inline-block;
            margin: 0 1rem;
            padding: 0.5rem 1rem;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }
        .nav-links a:hover {
            background-color: #555; /* Darker background color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Library</h1>
        <div class="nav-links">
            <a href="books.php">Browse Books</a>
            <a href="borrow.php">Borrow a Book</a>
            <a href="return.php">Return a Book</a>
        </div>
    </div>
</body>
</html>
