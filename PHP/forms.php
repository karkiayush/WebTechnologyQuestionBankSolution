<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storing data via php forms</title>
</head>

<body>
    <form action="./datasaver.php" method="POST" name="userInfo">

        <label for="uname">User Name: </label>
        <input type="text" id="uname" name="uname">

        <label for="rollnum">Roll num: </label>
        <input type="text" id="rollnum" name="rollnum">

        <label for="email">Email: </label>
        <input type="email" id="email" name="email">

        <label for="address">Address: </label>
        <input type="text" id="address" name="address">

        <input type="submit" name="login" value="login">
    </form>
</body>

</html>