<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <title>Concatenate Strings</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            background-color: #fff;
            text-align: center;
            max-width: 600px;
            padding: 60px;
            border-radius: 5px;
            box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
        }
        form {
            margin-top: 20px;
        }
        label {
            text-align: left;
            display: block;
            margin-bottom: 10px;
            font-weight: 400;
            font-size: 20px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #4b5563;
            border-radius: 5px;
            box-sizing: border-box; /* Ensure padding doesn't affect width */
            font-size: 16px;
        }
        button[type="submit"] {
            display: block;
            margin: auto;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            background-color: #04AA6D;
            border: none;
            color: white;
            opacity: 0.6;
            transition: 0.3s;
        }

        button[type="submit"]:hover {
            opacity: 1;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 27px;
        }
        p {
            text-align: justify;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Check Age Eligibility</h2>
    <form method="post" action="">
        <label for="age">Enter your age:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit" name="submit">Check Eligibility</button>
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $age = $_POST['age'];

        if ($age >= 18 && $age <= 25) {
            echo "<p>Your age is $age it's within the eligible range 18 to 25.</p>";
        } else {
            echo "<p>Your age $age is not within the eligible range of 18 to 25.</p>";
        }
    }
    ?>
    </div>
</body>
</html>




</body>
</html>