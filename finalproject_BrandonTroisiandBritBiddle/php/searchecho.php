<html>
<head>
		<link href="homepageBrit.css" type="text/css" rel="stylesheet"/>
		<link href="sidebar.css" type="text/css" rel="stylesheet"/>
		<link href="aboutpage.css" type="text/css" rel="stylesheet"/>

</head>

<body>
	<?php
			$db = new PDO("mysql:dbname=Echo;host=localhost", "root", "");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$search=$_GET['search'];
			
			
			
			?>
			
			<h2 style="text-align:center"> <b>Results of Search <b></h2>
			
			<table>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Title</th>
					<th>Category</th>
				</tr>
			<?php
			
			// $q1 = "SELECT id FROM actors WHERE (first_name LIKE '".$_GET['firstname']." %' 
// 			OR first_name = '".$_GET['firstname']."') AND last_name = '".$_GET['lastname']."' 
// 			AND film_count >= all(SELECT film_count FROM actors WHERE (first_name LIKE'".$_GET['firstname']." %' OR first_name = '".$_GET['firstname']."') 
// 			AND last_name = '".$_GET['lastname']."')";
// 			
			$q="SELECT auth.first_name, auth.last_name, art.title, c.category FROM authors 
			auth JOIN articles art ON auth.author_id=art.author_id JOIN categories c  
			ON art.category_id= c.category_id WHERE art.title = '".$search."'";
		
		
			$rows=$db->query($q);
			
			if($rows->rowCount()==0) {?>
				<tr>
				<td></td>
				<td><?= "'".$_GET["search"]."'"?> is not an article in The Colby Echo</td>
				<td></td>
				</tr>
			<?php
			
			} 
			else {
				
					foreach($rows as $row){
					?>
					<tr>
					
						<td><?= $row["first_name"]?></td>
						<td><?= $row["last_name"]?></td>
						<td><?= $row["title"]?></td>
						<td><?= $row["category"]?></td>

						
					
					</tr>
				<?php } 
			}
	?>
				
			</table>
</body>
</html>
