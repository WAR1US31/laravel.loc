<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
</head>
<body>
<form action="{{ route('contact') }}" method="post">
    @csrf
    @method('PUT')
    <label>
        <input type="text" name="name">
    </label>
    <label>
        <input type="email" name="email">
    </label>
    <button type="submit">submit</button>
</form>
</body>
</html>
