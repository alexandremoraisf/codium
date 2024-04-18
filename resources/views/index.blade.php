<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css"> 
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Us Parents</h1> 
            </div>
            <ul>
                <li><a href="/">Home</a></li>  
                <li><a href="/login">Login</a></li> 
                <li><a href="/register">Register</a></li> 
                <li><a href="/about">About</a></li> 
            </ul>
        </nav>
    </header>

    @auth
    <div class="register-form">
        <h2>Welcome! </h2>
        <form action="/logout" method="POST">
            @csrf
            <button class="form-button">Log out</button>
        </form>
    </div>
    @else
    <div class="register-form">
        <h2>Please login to continue</h2>
        <form action="/login" method="GET">
            @csrf
            <button class="form-button">Log in</button>
        </form>
    </div>
    @endauth

    
</body>
<footer>
    <p>&copy; 2024 Alexandre Morais</p>
</footer>
</html>