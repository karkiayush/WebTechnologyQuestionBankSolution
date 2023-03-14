<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pattern matching with php</title>
</head>

<body>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Validate name field
        if (empty($name)) {
            echo "Please enter your name";
        } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "Invalid name format";
        }

        // Validate email field
        if (empty($email)) {
            echo "Please enter your email";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }

        // Validate phone field
        if (empty($phone)) {
            echo "Please enter your phone number";
        } else if (!preg_match("/^[0-9]*$/", $phone)) {
            echo "Invalid phone number format";
        }
    }
    ?>
</body>

</html>  