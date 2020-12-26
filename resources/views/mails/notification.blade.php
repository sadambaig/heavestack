<!DOCTYPE html>
<html>
<head>
	<title>Username and password</title>
</head>
<body>
	<h1>name: {{ $data['name'] }}</h1>
<h1>username: {{ $data['username'] }}</h1>
<h1>password: {{ $data['password'] }}</h1>
<h1>Login: <a href="{{ $data['loging_url'] }}" title="">Login</a></h1>
</body>
</html>