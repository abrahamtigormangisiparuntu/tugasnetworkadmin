<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <h1>Ini Halaman Homes</h1>
    <h3>Welcome to FreshFruit</h3>
    <h3>Where fruit in this web is fresh</h3>
    <h3><?php echo $nama; ?></h3>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $nama }}" width="200">
    <script src="js/alert.js"></script>
</body>
</html>