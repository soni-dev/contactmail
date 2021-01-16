<!DOCTYPE html>
<html>
<head>
	<title>Send Mail</title>
</head>
<body>
	<form action="" method="post">
		@csrf
<input type="text" name="name" placeholder="Enter your Name">
<input type="email" name="email" placeholder="Enter your Email">
<textarea placeholder="Enter your Message" name="message"></textarea>
<button type="submit">Send</button>
</form>
</body>
</html>