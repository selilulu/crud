<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<h1>Collection</h1>
<div class="row justify-content-center">
	<form class="form-inline" method="POST" action="">
	<div class="form-group">
		<label> Name : </label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Month : </label>
		<input type="text" name="month" class="form-control" >
	</div>
	<div class="form-group">
	<button type="submit" name="save" class="btn btn-primary">Save</button>
	</div>
	</form>
</div>
<ul>
<?php foreach ($cards as $card) : ?>
    <li><?= $card['month'] ?></li>
<?php endforeach; ?>
</ul>	


</body>
</html>