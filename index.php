<!DOCTYPE html>
<html>
<head>
	<title>48 Group Information</title>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- MDBootstrap Datatables  -->
<link href="plugin/mdbootstrap/css/addons/datatables.min.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="plugin/mdbootstrap/js/addons/datatables.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function () {

		$('#tableData').DataTable({
			"paging": false,
		});

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

	#tableData {
		/*table-layout:fixed;*/
		font-size: 13px;
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

	<div class="table-responsive">
		
		<table id="tableData" class="table table-bordered table-hover" cellspacing="0" >
			<thead>
			<tr>
				<th style="font-size: 1vw;">ชื่อ-นามสกุล</th>
				<th style="font-size: 1vw;">Full Name</th>
				<th style="font-size: 1vw;width: 9%;">ชื่อเล่น</th>
				<th style="font-size: 1vw;">Nickname</th>
				<th style="font-size: 1vw;">วันเกิด</th>
				<th style="font-size: 1vw;">ส่วนสูง(cm.)</th>
				<th style="font-size: 1vw;">ภูมิลำเนา</th>
				<th style="font-size: 1vw;">Group</th>
				<th style="font-size: 1vw;">Team</th>
				<th style="font-size: 1vw;">Gen</th>
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
	</div>


	<div class="footer">
	<p></p>
	<b>Kaning CGM48 Thailand Fanclub</b> <br>
	<a href="https://facebook.com/kaningcgm48thailandfanclub" target="_blank" style="color:#000000"><i class="fab fa-facebook-square"></i> Facebook</a> | 
	<a href="https://twitter.com/kaningcgm48thfc" target="_blank" style="color:#000000"><i class="fab fa-twitter-square"></i> Twitter </a> | 
	<a href="https://www.instagram.com/kaningcgm48thfc/" target="_blank" style="color:#000000"><i class="fab fa-instagram"></i> Instagram</a>
	<p></p>

</body>
</html>