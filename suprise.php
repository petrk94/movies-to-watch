<?php
$db_host = ''; // Server Name
$db_user = ''; // Username
$db_pass = ''; // Password
$db_name = ''; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT movies FROM movies ORDER BY RAND() LIMIT 1';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>


		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>Your next movie to watch: '.$row['movies'].'</td>					
				</tr>';
		}?>