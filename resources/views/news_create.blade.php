
<!doctype html>
<html>
<head>
    <title>Login Form</title>
    <style type="text/css">
        .error-message { color: red; }
    </style>
</head>

<body>
<form method="post" action="">
    @csrf
    <div>
        <label for="mail_address"> mail_address</label> <br>
        <input type="text" name="mail_address">
        @error('mail_address')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="password">password </label><br>
        <input type="text" name="password">

        @error('password')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="password_confirmation">password_confirmation </label><br>
        <input type="text" name="password_confirmation">
        @error('password_confirmation')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="address">address</label><br>
        <input type="text" name="address">
        @error('address')

        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="phone">phone</label><br>
        <input type="text" name="phone">
        @error('phone')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <p><button type="submit">Submit</button></p>
</form>
</body>
</html>
