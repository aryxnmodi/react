<?php

$json=file_get_contents('https://jsonplaceholder.typicode.com/photos');


// json data convert in php arr
$arr=json_decode($json); // json econvert to arr
?>

<table border="2" width="80%" align="center">
	<tr>
		<td>ID</td>
		<td>Title</td>
		<td>Image</td>
	</tr>
	<?php
	foreach($arr as $d)
		{
		?>	
	<tr>
		<td><?php echo $d->id;?></td>
		<td><?php echo $d->title;?></td>
		<td><img src="<?php echo $d->url;?>" width="100px" /></td>
	</tr>
		<?php
		}
?>
	
</table>





