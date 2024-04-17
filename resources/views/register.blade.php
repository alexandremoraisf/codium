<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            Username <br />
            <input type="text" name="name" palceholder="name">
            <br />
            Email <br />
            <input type="text" name="email" palceholder="email">
            <br />
            Password <br />
            <input type="password" name="password" palceholder="password">
            <br />
            <button>Register</button>
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