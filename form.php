<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form input, form button{
            display:  block;
            margin : 20px auto;
        }
    </style>
</head>
<body>
    <form action="formcrud.php" method="POST">
    <input type="email" name="email" id="" placeholder="email">
    <input type="text" name="fullname" id="" placeholder="fullname">
    <input type="password" name="password" id="" placeholder="password">
    <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>