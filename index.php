<!DOCTYPE html>
<html>
<head>
	<title>48 Group Information</title>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- MDBootstrap Datatables  -->
<link href="plugin/mdbootstrap/css/addons/datatables.min.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="plugin/mdbootstrap/js/addons/datatables.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function () {

		$('#tableData').DataTable();

	});

</script>

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

<body style="width:95%;margin: auto;">

	<h2>MEMBER BNK48 & CGM48</h2>

	<?php 
		// echo "<pre>";
		// print_r($memberArray);
		// echo "</pre>";
		// 
	?>

	<table id="tableData" class="table table-striped table-bordered table-sm " cellspacing="0">
		<thead>
		<tr>
			<th>ชื่อ-นามสกุล (TH)</th>
			<th>ชื่อ-นามสกุล (EN)</th>
			<th>ชื่อเล่น (TH)</th>
			<th>ชื่อเล่น (EN)</th>
			<th>วันเกิด</th>
			<th>ส่วนสูง(cm.)</th>
			<th>ภูมิลำเนา</th>
			<th>Group</th>
			<th>Team</th>
			<th>Generation</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($memberArray as $key => $value): ?>
			<tr>
				<td><?= $value["fullname_th"] ?></td>
				<td><?= $value["fullname_en"] ?></td>
				<td><?= $value["nickname_th"] ?></td>
				<td><?= $value["nickname_en"] ?></td>
				<td><?= $value["birthday"] ?></td>
				<td><?= $value["height"] ?></td>
				<td><?= $value["birthplace"] ?></td>
				<td><?= $value["group"] ?></td>
				<td><?= $value["team"] ?></td>
				<td><?= $value["generation"] ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
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