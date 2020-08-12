<!DOCTYPE html>
<html>
<head>
	<title>48 Group Birthday</title>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<style>
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: #6ac3ae;
		color: #000000;
		text-align: center;
	}
</style>

<?php include("member.php"); ?>

<body style="width:90%;margin: auto;">

	<h2>MEMBER BNK48 & CGM48</h2>

	<?php 
		// echo "<pre>";
		// print_r($memberArray);
		// echo "</pre>";
	?>

	<table class="table table-stript table-bordered">
		<tr>
			<th>NameTH</th>
			<th>NameEN</th>
			<th>NicknameTH</th>
			<th>NicknameEN</th>
			<th>Birthday</th>
			<th>Height</th>
			<th>Birthplace</th>
			<th>Group</th>
			<th>Team</th>
			<th>Generation</th>
		</tr>
		<?php foreach ($memberArray as $key => $value): ?>
			<tr>
				<td><?= $value[0] ?></td>
				<td><?= $value[1] ?></td>
				<td><?= $value[2] ?></td>
				<td><?= $value[3] ?></td>
				<td><?= $value[4] ?></td>
				<td><?= $value[5] ?></td>
				<td><?= $value[6] ?></td>
				<td><?= $value[7] ?></td>
				<td><?= $value[8] ?></td>
				<td><?= $value[9] ?></td>
			</tr>
		<?php endforeach ?>
	</table>


	<div class="footer">
	<p></p>
	<b>Kaning CGM48 Thailand Fanclub</b> <br>
	<a href="https://facebook.com/kaningcgm48thailandfanclub" target="_blank" style="color:#000000"><i class="fa fa-facebook-square"></i> Facebook</a> | 
	<a href="https://twitter.com/kaningcgm48thfc" target="_blank" style="color:#000000"><i class="fa fa-twitter-square"></i> Twitter </a> | 
	<a href="https://www.instagram.com/kaningcgm48thfc/" target="_blank" style="color:#000000"><i class="fa fa-instagram"></i> Instagram</a>
	<p></p>

</body>
</html>