<!DOCTYPE html>
<html>
<head>
<title>Project</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>

<Section class="my-3">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" autocomplete="off" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" autocomplete="off" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile Number</label>
				<input type="text" autocomplete="off" name="mobile" class="form-control">
			</div>
			<div class="form-group">
				<label>Article</label>
				<textarea class="form-control" name="article"></textarea>
			</div>
			<div class="text-center">
			<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</form>
	</div>
</Section>

</body>

</html>
