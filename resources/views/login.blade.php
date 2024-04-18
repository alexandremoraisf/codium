<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            Email
            <input type="text" name="loginName" palceholder="name">
            <br />
            Password
            <input type="password" name="loginPassword" palceholder="password">
            <br />
            <button>Log in</button>
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
</html>