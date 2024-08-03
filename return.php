<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = $_POST['book_id'];
    
    $sql = "UPDATE books SET status='Available' WHERE id='$book_id' AND status='Borrowed'";
    
    if ($conn->query($sql) === TRUE) {
        $message = "Book returned successfully";
    } else {
        $message = "Error returning book: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-bottom: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        main {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-bottom: 10px;
        }
        input[type="number"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1rem;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #555;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #f2f2f2;
            border-left: 4px solid #333;
        }
        .success {
            border-color: #4CAF50;
            color: #4CAF50;
        }
        .error {
            border-color: #f44336;
            color: #f44336;
        }
        footer {
            text-align: center;
            padding: 1rem 0;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Return a Book</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="borrow.php">Borrow</a></li>
                <li><a href="return.php">Return</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Return Book</h2>
        <form method="post" action="return.php">
            <label for="book_id">Enter Book ID:</label>
            <input type="number" id="book_id" name="book_id" required>
            <button type="submit">Return</button>
        </form>
        <?php if (!empty($message)): ?>
            <p class="message <?php echo ($message === 'Book returned successfully') ? 'success' : 'error'; ?>"><?php echo $message; ?></p>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 Library</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
