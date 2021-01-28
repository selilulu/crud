<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h3>Calendar for New Borns</h3>
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
<div class="tableContainer">
	<table>
  <tr>
    <div><th>Name</th></div>
    <div><th>Month</th></div>
  </tr>
  <tr>
	<td><?=$card['name']?></td>
	<td><?=$card['month']?></td>
	<td>
	<div class="edit">
	<a href="edit.php?edit=<?= $card['id'];?>" class ="btn btn-info ">Edit</a>
	</div>
	</td>
	<td>
	<div class="delete">
	<a href="deleteIndex.php?delete=<?= $card['id'];?>" class ="btn btn-danger ">Delete</a>
	</div>
	</td>
  </tr>
  </table>
  </div>
	
<?php endforeach; ?>
</ul>	

<style>
*{
	font-family: 'Marck Script', cursive;

}
.tableContainer{

  display: flex;	
  align-items: center;
  justify-content: center;	
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td {
  border: 1px solid #dddddd;
  padding: 8px;
  text-align:center;	
}
th{
border: 1px solid #dddddd;
  padding: 8px;
  text-align:center; 

}
.delete,.edit{
	align-items:center;
}


tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</body>
</html>