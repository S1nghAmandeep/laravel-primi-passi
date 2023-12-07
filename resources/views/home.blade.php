<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <h1>Home</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-us">{{$about}}</a></li>
                    <li><a href="/blog">{{$blog}}</a></li>
                    <li><a href="/contact">{{$contact}}</a></li>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>