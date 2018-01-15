<!DOCTYPE HTML>

<html lang="pl">

<head>

	<meta charset="utf-8" />
	<title>Warsztat</title>
	<meta name="description" content="Raspberry" />
	<meta name="keywords" content="RapsberryPi" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<style type="text/css">
		th,
		td,
		tr,
		table {
			font-family: 'Lato', sans-serif;
			border-radius: 3px;
			padding: 0;
			margin: 0;
			width="auto"
		}
		
		th {
			width: auto border-left: 2px solid gray;
			border-bottom: 2px solid: grey;
			border-radius: 3px;
		}
		
		td {
			width: auto border-left: 1px solid gray;
			border-radius: 3px;
		}
		
		h2 {
			width: auto padding: 10px align: center;
			border-radius: 3px;
		}
	</style>
</head>

<body>
	</br>
	<center>

		<table width="100%"  align="center" border="01">


			<tr>
				<td colspan="8" align="center" >
					<h3>Lista pracowników</h3>
			<th></tr>

			<tr align="center">

				<th>Nr</th>
<!--				<th>Zdjęcie</th>-->
				<th>Numer karty dostępu</th>
				<th>Nazwisko, Imię</th>
				<th>Telefon</th>
				<th>Sektor&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
				<th>Data zarejstrowania</th>
		        <th>Usuń</th>
				
				
			
			<?php
	include("db_connect/connect.php");

		$run_posts = $db -> query("select * from pracownicy");
		$i=1; 
    while($row_posts = $run_posts ->fetch(PDO::FETCH_ASSOC)) {
		
		
		$post_id = $row_posts ['id'];
//		$mpost_image = $row_posts ['image'];
		$post_title = $row_posts ['nr_karty'];
		$post_author = $row_posts ['autor'];
		$post_keywords = $row_posts ['telefon'];
		$post_status = $row_posts['status'];
		$post_cat = $row_posts['category_id'];
		$post_datos = $row_posts['datos'];
		
//				$post_date = $row_posts['data('Y-m-d H:i:s')'];
		
	?>

				<tr align="center">
					<td>
						<?php echo $i++; ?>
					</td>

<!--					<td><img src="../includes/news_images/<?php 
		//echo $mpost_image; ?>" width="80" height="50"></td>-->

					<td>
						<?php echo $post_title; ?>
					</td>

					<td>
						<?php echo $post_author; ?>
					</td>
					<td>
						<?php echo $post_keywords; ?>
					</td>
<!--
					<td>
						<?php echo $post_status; ?>
					</td>
-->
					
					<td>
						<?php echo $post_cat; ?>

					</td>
					<td>
						<?php echo $post_datos; ?>
					</td>
				

					
					<td><a href="includes/delete_post.php?delete_post=<?php echo $post_id; ?>">Usuń</a></td>

				</tr>
		

				<?php } ?>


		</table>
	</center>

</body>

</html>