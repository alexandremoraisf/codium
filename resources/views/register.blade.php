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
            First Name <br />
            <input type="text" name="name">
            <br />
            Last Name <br />
            <input type="text" name="lname">
            <br />
            Email Address <br />
            <input type="text" name="email">
            <br />
            What best describes your family situation?
            <br />
            <select name="family_situation">
                <option hidden disabled selected value></option>
                <option value="Intact Family">Intact Family</option>
                <option value="Separed Family">Separed Family</option>
                <option value="Single Parent">Single Parent</option>
            </select>
            <br />
            Password <br />
            <input type="password" name="password">
            <br />
            Repeat Password <br />
            <input type="text" name="re_password" id="re_password">
            <br />
            <input type="hidden" name="accepts_marketing" value="0">
            <input type="checkbox" name="accepts_marketing" value="1">
            I would like to receive occasional marketing communication.
            <br />
            <input type="hidden" name="accepts_terms" value="0">
            <input type="checkbox" name="accepts_terms" value="1">
            I agree to the privacy policy and terms and conditions of use.
            <br />
            <input type="hidden" name="accepts_surveys" value="0">
            <input type="checkbox" name="accepts_surveys" value="1">
            I am willing to participate in future content surveys or reserch.
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