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
    <div class="register-form">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" name="lname">
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="family_situation">What best describes your family situation?</label>
                <select name="family_situation">
                    <option hidden disabled selected value></option>
                    <option value="Intact Family">Intact Family</option>
                    <option value="Separed Family">Separed Family</option>
                    <option value="Single Parent">Single Parent</option>
                </select>
            </div>
            <div class="form-group">
                <label for="loginName">Password:</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="loginName">Repeat Password:</label>
                <input type="text" name="re_password" id="re_password">
            </div>
            <div>
                <input type="hidden" name="accepts_marketing" value="0">
                <input type="checkbox" name="accepts_marketing" value="1">
                I would like to receive occasional marketing communication.
            </div>
            <div>
                <input type="hidden" name="accepts_terms" value="0">
                <input type="checkbox" name="accepts_terms" value="1">
                I agree to the privacy policy and terms and conditions of use.
            </div>
            <div>
                <input type="hidden" name="accepts_surveys" value="0">
                <input type="checkbox" name="accepts_surveys" value="1">
                I am willing to participate in future content surveys or reserch.
            </div>
            <br />
            <button class="form-button">Register</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
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