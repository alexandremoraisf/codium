<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="login-form">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="loginName">Email:</label>
                <input type="text" name="loginName" id="loginName">
            </div>
            <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input type="password" name="loginPassword" id="loginPassword">
            </div>
            <button class="form-button">Log in</button>
        </form>

        @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>
<footer>
    <p>&copy; 2024 Alexandre Morais</p>
</footer>
</html>