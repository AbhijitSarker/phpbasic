<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
</head>
<body>
    

    <form action="contact.php" method="POST">
        <label for="">Username</label><br>
        <input type="text" name="user_name"><br>
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <label for=""> Password</label><br>
        <input type="Password" name="password"> <br><br>
        <input type="Submit" value="Submit Data" name="btn">
    </form>
</body>
</html>